<?php

namespace App\Http\Controllers\Api;

use EasyWeChat\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


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
        //配置服务----------
//        $response = $this->app->server->serve();
        // 将响应输出
//        return $response; // Laravel 里请使用：return $response;
        //配置服务----------END

        $this->app->server->push(function ($message) {
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

    }
}