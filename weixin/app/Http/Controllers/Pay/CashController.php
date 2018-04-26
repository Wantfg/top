<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\WechatController;
use Illuminate\Http\Request;

class CashController extends WechatController
{

    public function index(Request $request)
    {


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
