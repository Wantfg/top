<?php

namespace App\Http\Controllers\Car;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $car_info = array();
        $str = file_get_contents(asset('files/brands.html'));

        //pattern--------------------------------
        $abc_pattern = '/<div vos="gs" class="uibox" id="(?:\w+)" style(?:=""|="display:none")>(.*?)<\/div>\s*<\/div>/ism';
        $brand_abc_pattern = '/<div class="uibox-title uibox-title-border" data="(?:.*)"><span class="font-letter">(\w{1})<\/span><\/div>/';
        $brand_name_pattern = '/<dl id="(?:\d+)" olr="(?:\d+)">(.*?)<\/dl>/ism';
        $brand_name_zh_pattern = '/<div><a href="https:\/\/car.autohome.com.cn\/pic\/brand-(?:\d+).html">(.*?)<\/a><\/div>/ims';
        $brand_name_factory_pattern = '/<div class="h3-tit">(.*?)<\/div>/';
        $brand_series_pattern = '/<ul class="rank-list-ul" 0="">(.*?)<\/ul>/s';
        $in_sale_series_pattern = '/<h4(?: class="toolong")?><a href="https:\/\/www.autohome.com.cn\/(\d+)\/#levelsource=000000000_0&amp;pvareaid=101594">(.*?)(?:<\/a><a href="(?:.*)" target="_blank" class="icon-double11">特卖)?<\/a><\/h4>/';
        $not_sale_series_pattern = '/<h4(?: class="toolong")?><a href="https:\/\/www.autohome.com.cn\/(\d+)\/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">(.*?)(?:<\/a><a href="(?:.*)" target="_blank" class="icon-double11">特卖)?<\/a><\/h4>/';
        //pattern----------------------------------------

        //1、先以字母区分
        preg_match_all($abc_pattern,$str,$brand_row);
        foreach ($brand_row[0] as $k => $brand_each){
            //2、查询出品牌的字母
            preg_match($brand_abc_pattern,$brand_each,$brand_abc_row);
            $car_info[$k]['brand_abc'] = $brand_abc_row[1];
            //3、以品牌区分
            preg_match_all($brand_name_pattern,$brand_each,$brand_name_row);
            //4、查询出品牌名称
            foreach ($brand_name_row[0] as $kk => $brand_name_each){
                $in_sale_series_ = $not_sale_series_ = $series = [];
                preg_match($brand_name_zh_pattern,$brand_name_each,$brand_name);
                $brand_name_zh = $brand_name[1]; //品牌中文名
                preg_match_all($brand_name_factory_pattern,$brand_name_each,$brand_name_factory);
                $brand_name_factory = $brand_name_factory[1]; //品牌旗下的厂商名称
                preg_match_all($brand_series_pattern,$brand_name_each,$brand_series);
                foreach ($brand_series[0] as $it){
                    preg_match_all($in_sale_series_pattern,$it,$in_sale_series);
                    preg_match_all($not_sale_series_pattern,$it,$not_sale_series);
                    //将车型的汽车之家id设置为键值
                    foreach ($in_sale_series[2] as $id_K => $item){
                        $in_sale_series_[] = ['autohome_id' => $in_sale_series[1][$id_K],'name' => $in_sale_series[2][$id_K]];
                    }
                    foreach ($not_sale_series[2] as $id_K => $item){
                        $not_sale_series_[] = ['autohome_id' => $not_sale_series[1][$id_K],'name' => $not_sale_series[2][$id_K]];
                    }

                        $series[] = array(
                            'in_sale' => $in_sale_series_,
                            'not_sale' => $not_sale_series_
                        );
                }
                $car_info[$k]['brand_info'][] = array(
                    'brand_name_zh' => $brand_name_zh,
                    'brand_factory' => $brand_name_factory,
                    'series' => $series
                );
            }
        }
        $a = DB::table('car_brand')->get();

        var_dump($a);

    }
}
