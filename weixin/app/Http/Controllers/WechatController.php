<?php

namespace App\Http\Controllers;



use EasyWeChat\Factory;

class WechatController extends Controller
{

    protected $app = '';

    public function __construct()
    {
        $config = [
            'app_id' => config('wechat.app_id'),
            'secret' => config('wechat.secret'),
            'token' => config('wechat.token'),          // Token
            'aes_key' => config('wechat.aes_key'),        // EncodingAESKey，兼容与安全模式下请一定要填写！！！

            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__ . '/wechat.log',
            ],
        ];
        $this->app = Factory::officialAccount($config);
    }
}
