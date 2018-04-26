<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\WechatController;
use Illuminate\Http\Request;

class CashController extends WechatController
{

    public function index(Request $request)
    {
        $info = $this->app->template_message->send([
            'touser' => $request->session()->get('openid'),
            'template_id' => 'QFQ2GO3_pRPcvMeuBzvwQ-4s7f-4QSly9p2eBUe9NHE',
            'url' => 'https://www.easywechat.com/',
            'data' => [
                'first' => '你好！吧啦吧啦',
                'token' => ['0022223','#f9421b'],
                'remark' => '这里是描述'
            ],
        ]);

        dd($request->session()->all(),$request->session()->get('openid'),$info);
    }
    
    public function service()
    {
        echo ' <script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?f55e6e25ad1971875ccd32b812746567";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();
    </script>';
    }
}
