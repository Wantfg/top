<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\WechatController;
use EasyWeChat\Kernel\Messages\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WxController extends WechatController
{
    //
    public function index()
    {
        $this->app->server->push(function ($message) {
            DB::table('test')->insert([
                'test' => json_encode($message),
                'remark1' => 'in_info'
            ]);
            switch ($message['MsgType']) {
                case 'event':
                    return '收到事件消息';
                    break;
                case 'text':
                    if ($message['Content'] == '人工') {
                        return new Transfer();
                    } else if($message['Content'] == '112'){
                        $response = $this->app->template_message->send([
                            'touser' => $message['FromUserName'],
                            'template_id' => 'QFQ2GO3_pRPcvMeuBzvwQ-4s7f-4QSly9p2eBUe9NHE',
                            'url' => 'https://www.easywechat.com/',
                            'data' => [
                                'first' => '你好！吧啦吧啦',
                                'token' => ['0022223', '#f9421b'],
                                'remark' => '这里是描述'
                            ],
                        ]);
                        return $response;
                        
                    } else {
                        return '收到文字消息';
                    }
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

        // 将响应输出
        return $response;
    }

    public function getConfigInfo($name)
    {

    }

}