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
        echo "欢迎开始微信世界";
        $response = $this->app->server->serve();
        // 将响应输出
        return $response; // Laravel 里请使用：return $response;

    }
}