<!DOCTYPE html>
<!-- saved from url=(0030)http://shopping.bb/default.php -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Generator" content="haohaios v1.0">

    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <meta name="format-detection" content="telephone=no">
    <title>掌上凡宫</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="{{ asset('css/market/pc.css') }}" rel="stylesheet">
    <link href="{{ asset('css/market/layer.css') }}" type="text/css" rel="styleSheet" id="layermcss">
</head>
<body>
<div class="header">
    <div class="container">
        <a href="{{url('market')}}" class="js-hover logo" data-target="js-shop-info1">掌上凡宫<span
                    class="icon-wxv"></span></a>
        <ul class="nav">
            <li class="cur"><a href="{{url('market')}}">首页</a></li>
        </ul>
    </div>

    <div class="shop-info shop-info-fixed js-shop-info">
        <div class="container clearfix" style="height: 220px;">
            <img class="shop-qrcode pull-left" src="6.jpg">
            <div class="shop-desc pull-left" style="margin-left: 50px;">
                <dl>
                    <dt>掌上凡宫</dt>
                    <dd></dd>
                    <dt>微信扫描二维码，访问我们的微信店铺</dt>
                    <dd>您可以使用微信联系我们，随时随地的购物、客服咨询、查询订单和物流...</dd>
                </dl>
            </div>
            <span class="arrow"></span>
        </div>
    </div>
</div>
<div class="container main clearfix">
    <ul class="goods-list clearfix">
        @foreach ($products as $item)
            <li>
                <a href="{{ url('market/product',['id'=>$loop->iteration]) }}" target="_self">
                    <div class="image">
                        <img data-original="{{ asset('images/procducts.png') }}" src="{{ asset('images/procducts.png') }}" class="lazy" style="display: block;">
                    </div>
                    <div class="title">企业、展示、推广、内部广告系统、OA系统、电商定制等</div>
                    <span class="price">￥ 88888.00</span>
                </a>
            </li>
        @endforeach
    </ul>

    <form name="selectPageForm" action="{{url('market')}}" method="get">
        <div id="pager" class="pagination">
            <span>总计 <b>6</b>  个记录</span>
            <span class="pagination-num active">1</span>
        </div>
    </form>
</div>
<script type="text/javascript" src="{{ asset('js/market/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/market/pc_min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/market/jquery.lazyload.js') }}"></script>

<script>
    window.onload = function () {
        $('.js-hover').hover();
        $("img.lazy").lazyload({
            effect: "fadeIn",
            threshold: 200
        });
        $("img.lazy:eq(0)").attr('src', $("img.lazy:eq(0)").attr('data-original'));
    }

</script>

<p align="center">
    <a href="http://www.miitbeian.gov.cn/"> 网站备案：粤ICP备15069400号-1 </a>
</p>
<p align="center">

</p>
</body>
</html>