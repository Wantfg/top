<?php

namespace App\Http\Controllers\Api;

use EasyWeChat\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class WxController extends Controller
{

    private $app = '';

    public function __construct()
    {
        $config = [
            'app_id' => config('wechat.app_id'),
            'secret' => config('wechat.secret'),
            'token'   => config('wechat.token'),          // Token
            'aes_key' => config('wechat.aes_key'),        // EncodingAESKey，兼容与安全模式下请一定要填写！！！

            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];
        $this->app = Factory::officialAccount($config);
    }

    //
    public function index()
    {
        DB::table('test')->insert([
            'remark1' => 14
        ]);
        $this->app->server->push(function ($message) {
            DB::table('test')->insert([
                'remark1' => 13
            ]);
            DB::table('test')->insert([
                'test' => $message,
                'remark1' => 12
            ]);
            DB::table('test')->insert([
                'test' => json_encode($message),
                'remark1' => 11
            ]);
            switch ($message['MsgType']) {
                case 'event':
                    return '收到事件消息';
                    break;
                case 'text':
                    return '收到文字消息';
                    break;
                case 'image':
                    return '收到图片消息';
                    break;
                case 'voice':
                    return '收到语音消息';
                    break;
                case 'video':
                    return '收到视频消息';
                    break;
                case 'location':
                    return '收到坐标消息';
                    break;
                case 'link':
                    return '收到链接消息';
                    break;
                // ... 其它消息
                default:
                    return '收到其它消息';
                    break;
            }

            // ...
        });

        $response = $this->app->server->serve();
        DB::table('test')->insert([
            'test' => $response,
            'remark1' => 1
        ]);
        // 将响应输出
        return $response; // Laravel 里请使用：return $response;

    }
}