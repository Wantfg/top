<?php

namespace App\Http\Controllers\Car;

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
        $brand_area_pattern = '/<dl id="(?:\d+)" olr="(?:\d+)">(.*?)<\/dl>/ism';
        $brand_name_pattern = '/<div><a href="https:\/\/car.autohome.com.cn\/pic\/brand-(?:\d+).html">(.*?)<\/a><\/div>/ims';
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
            preg_match_all($brand_area_pattern,$brand_each,$brand_name_row);
            //4、查询出品牌名称
            foreach ($brand_name_row[0] as $kk => $brand_name_each){
                $in_sale_series_ = $not_sale_series_ = $series = [];
                preg_match($brand_name_pattern,$brand_name_each,$brand_name_row);
                $brand_name = $brand_name_row[1]; //品牌中文名
                preg_match_all($brand_name_factory_pattern,$brand_name_each,$brand_name_factory);
                $brand_name_factory = $brand_name_factory[1]; //品牌旗下的厂商名称
                preg_match_all($brand_series_pattern,$brand_name_each,$brand_series);
                foreach ($brand_series[0] as $kk => $it){
                    preg_match_all($in_sale_series_pattern,$it,$in_sale_series);
                    preg_match_all($not_sale_series_pattern,$it,$not_sale_series);
                    //将车型的汽车之家id设置为键值
                    foreach ($in_sale_series[2] as $id_K => $item){
                        $series[$kk][] = ['autohome_id' => $in_sale_series[1][$id_K],'name' => $in_sale_series[2][$id_K],'in_sale' => 1];
                    }
                    foreach ($not_sale_series[2] as $id_K => $item){
                        $series[$kk][] = ['autohome_id' => $not_sale_series[1][$id_K],'name' => $not_sale_series[2][$id_K],'in_sale' => 0];
                    }
                }
                $car_info[$k]['brand_info'][] = array(
                    'brand_name' => $brand_name,
                    'brand_factory' => $brand_name_factory,
                    'series' => $series
                );
                //保存品牌
                $brand_id = DB::table('car_brand')
                    ->where('brand_name',$brand_name)
                    ->value('id');
                if(empty($brand_id)){
                    $brand_id = DB::table('car_brand')->insertGetId([
                        'brand_abc' => $car_info[$k]['brand_abc'],
                        'brand_name' => $brand_name
                    ]);
                }
                //保存厂商
                foreach ($brand_name_factory as $kk => $item){
                    $factory_id = DB::table('car_factory')
                        ->where('brand_id',$brand_id)
                        ->where('factory_name',$item)
                        ->value('id');
                    if(empty($factory_id)){
                        $factory_id = DB::table('car_factory')->insertGetId([
                            'brand_id' => $brand_id,
                            'factory_name' => $item
                        ]);
                    }
                    //保存车系名称
                    foreach ($series[$kk] as $s){
                        $series_id = DB::table('car_series')
                            ->where('brand_id',$brand_id)
                            ->where('factory_id',$factory_id)
                            ->where('autohome_id',$s['autohome_id'])
                            ->where('series_name',$s['name'])
                            ->value('id');
                        if(empty($series_id)){
                            $series_id = DB::table('car_series')->insertGetId([
                                'brand_id' => $brand_id,
                                'factory_id' => $factory_id,
                                'autohome_id' => $s['autohome_id'],
                                'series_name' => $s['name'],
                                'in_sale' => $s['in_sale'],
                            ]);
                        }
                    }
                }

            }
        }
        var_dump($car_info);
//        $a = DB::table('car_brand')->get();
//
//        var_dump($a);

    }
}
