<?php

namespace App\Http\Controllers\Car;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $car_info = array();
        $str = file_get_contents(asset('files/brands.html'));
        $s=  '<dl id="33" olr="7">
                                        <dt><a z href="//car.autohome.com.cn/pic/brand-33.html"><img width="50" height="50" src="//car2.autoimg.cn/cardfs/brand/50/g16/M05/5B/78/autohomecar__wKgH11cVh1WADo76AAAK8dMrElU714.jpg"></a><div><a href="//car.autohome.com.cn/pic/brand-33.html">奥迪</a></div></dt>
                                        <dd>
                                            
                                            <div class="h3-tit">一汽-大众奥迪za</div>
                                            <ul class="rank-list-ul" 0="">
                                                
                                                <li id="s3170">
                                                <h4><a href="//www.autohome.com.cn/3170/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A3</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/3170/price.html#pvareaid=101446">19.23-25.80万</a></div><div><a href="//car.autohome.com.cn/price/series-3170.html#pvareaid=103446">报价</a> <a id="atk_3170" href="//car.autohome.com.cn/pic/series/3170.html#pvareaid=103448">图库</a> <a data-value="3170" class="" href="//www.che168.com/441900/series3170/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3170-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3170/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s692">
                                                <h4><a href="//www.autohome.com.cn/692/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A4L</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/692/price.html#pvareaid=101446">29.28-40.98万</a></div><div><a href="//car.autohome.com.cn/price/series-692.html#pvareaid=103446">报价</a> <a id="atk_692" href="//car.autohome.com.cn/pic/series/692.html#pvareaid=103448">图库</a> <a data-value="692" class="" href="//www.che168.com/441900/series692/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-692-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/692/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s18">
                                                <h4><a href="//www.autohome.com.cn/18/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A6L</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/18/price.html#pvareaid=101446">40.60-69.80万</a></div><div><a href="//car.autohome.com.cn/price/series-18.html#pvareaid=103446">报价</a> <a id="atk_18" href="//car.autohome.com.cn/pic/series/18.html#pvareaid=103448">图库</a> <a data-value="18" class="" href="//www.che168.com/441900/series18/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-18-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/18/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s4526">
                                                <h4><a href="//www.autohome.com.cn/4526/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A6L新能源</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/4526/price.html#pvareaid=101446">53.98-53.98万</a></div><div><a href="//car.autohome.com.cn/price/series-4526.html#pvareaid=103446">报价</a> <a id="atk_4526" href="//car.autohome.com.cn/pic/series/4526.html#pvareaid=103448">图库</a> <a data-value="4526" class="" href="//www.che168.com/441900/series4526/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-4526-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/4526/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2951">
                                                <h4><a href="//www.autohome.com.cn/2951/#levelsource=000000000_0&amp;pvareaid=101594">奥迪Q3</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2951/price.html#pvareaid=101446">23.42-34.28万</a></div><div><a href="//car.autohome.com.cn/price/series-2951.html#pvareaid=103446">报价</a> <a id="atk_2951" href="//car.autohome.com.cn/pic/series/2951.html#pvareaid=103448">图库</a> <a data-value="2951" class="" href="//www.che168.com/441900/series2951/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2951-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2951/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s812">
                                                <h4><a href="//www.autohome.com.cn/812/#levelsource=000000000_0&amp;pvareaid=101594">奥迪Q5</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/812/price.html#pvareaid=101446">39.96-51.92万</a></div><div><a href="//car.autohome.com.cn/price/series-812.html#pvareaid=103446">报价</a> <a id="atk_812" href="//car.autohome.com.cn/pic/series/812.html#pvareaid=103448">图库</a> <a data-value="812" class="" href="//www.che168.com/441900/series812/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-812-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/812/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3304">
                                                <h4><a href="//www.autohome.com.cn/3304/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Q4</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3304" href="//car.autohome.com.cn/pic/series/3304.html#pvareaid=103448">图库</a> <a data-value="3304" class="" href="//www.che168.com/441900/series3304/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3304-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3304/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s19">
                                                <h4><a href="//www.autohome.com.cn/19/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪A4</a></h4>指导价：暂无<div><a href="//car.autohome.com.cn/price/series-19.html#pvareaid=103446">报价</a> <a id="atk_19" href="//car.autohome.com.cn/pic/series/19.html#pvareaid=103448">图库</a> <a data-value="19" class="" href="//www.che168.com/441900/series19/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-19-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/19/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s509">
                                                <h4><a href="//www.autohome.com.cn/509/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪A6</a></h4>指导价：暂无<div><a href="//car.autohome.com.cn/price/series-509.html#pvareaid=103446">报价</a> <a id="atk_509" href="//car.autohome.com.cn/pic/series/509.html#pvareaid=103448">图库</a> <a data-value="509" class="" href="//www.che168.com/441900/series509/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-509-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/509/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                            </ul>
                                            
                                            <div class="divline"></div>
                                            
                                            <div class="h3-tit">Audi Sport</div>
                                            <ul class="rank-list-ul" 0="">
                                                
                                                <li id="s2733">
                                                <h4><a href="//www.autohome.com.cn/2733/#levelsource=000000000_0&amp;pvareaid=101594">奥迪RS 4</a><i class="icon icon-jseason" title="将上市"></i></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2733" href="//car.autohome.com.cn/pic/series/2733.html#pvareaid=103448">图库</a> <a data-value="2733" class="" href="//www.che168.com/441900/series2733/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2733-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2733/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2731">
                                                <h4><a href="//www.autohome.com.cn/2731/#levelsource=000000000_0&amp;pvareaid=101594">奥迪RS 3</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2731/price.html#pvareaid=101446">56.50-56.50万</a></div><div><a href="//car.autohome.com.cn/price/series-2731.html#pvareaid=103446">报价</a> <a id="atk_2731" href="//car.autohome.com.cn/pic/series/2731.html#pvareaid=103448">图库</a> <a data-value="2731" class="" href="//www.che168.com/441900/series2731/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2731-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2731/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2737">
                                                <h4><a href="//www.autohome.com.cn/2737/#levelsource=000000000_0&amp;pvareaid=101594">奥迪RS 6</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2737/price.html#pvareaid=101446">159.80-159.80万</a></div><div><a href="//car.autohome.com.cn/price/series-2737.html#pvareaid=103446">报价</a> <a id="atk_2737" href="//car.autohome.com.cn/pic/series/2737.html#pvareaid=103448">图库</a> <a data-value="2737" class="" href="//www.che168.com/441900/series2737/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2737-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2737/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2994">
                                                <h4><a href="//www.autohome.com.cn/2994/#levelsource=000000000_0&amp;pvareaid=101594">奥迪RS 7</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2994/price.html#pvareaid=101446">169.88-189.80万</a></div><div><a href="//car.autohome.com.cn/price/series-2994.html#pvareaid=103446">报价</a> <a id="atk_2994" href="//car.autohome.com.cn/pic/series/2994.html#pvareaid=103448">图库</a> <a data-value="2994" class="" href="//www.che168.com/441900/series2994/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2994-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2994/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s511">
                                                <h4><a href="//www.autohome.com.cn/511/#levelsource=000000000_0&amp;pvareaid=101594">奥迪R8</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/511/price.html#pvareaid=101446">215.80-253.80万</a></div><div><a href="//car.autohome.com.cn/price/series-511.html#pvareaid=103446">报价</a> <a id="atk_511" href="//car.autohome.com.cn/pic/series/511.html#pvareaid=103448">图库</a> <a data-value="511" class="" href="//www.che168.com/441900/series511/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-511-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/511/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s2741">
                                                <h4><a href="//www.autohome.com.cn/2741/#levelsource=000000000_0&amp;pvareaid=101594">奥迪TT RS</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2741/price.html#pvareaid=101446">84.80-84.80万</a></div><div><a href="//car.autohome.com.cn/price/series-2741.html#pvareaid=103446">报价</a> <a id="atk_2741" href="//car.autohome.com.cn/pic/series/2741.html#pvareaid=103448">图库</a> <a data-value="2741" class="" href="//www.che168.com/441900/series2741/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2741-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2741/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2735">
                                                <h4><a href="//www.autohome.com.cn/2735/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪RS 5</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2735" href="//car.autohome.com.cn/pic/series/2735.html#pvareaid=103448">图库</a> <a data-value="2735" class="" href="//www.che168.com/441900/series2735/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2735-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2735/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2760">
                                                <h4><a href="//www.autohome.com.cn/2760/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪RS Q3</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2760" href="//car.autohome.com.cn/pic/series/2760.html#pvareaid=103448">图库</a> <a data-value="2760" class="" href="//www.che168.com/441900/series2760/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2760-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2760/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                            </ul>
                                            
                                            <div class="divline"></div>
                                            
                                            <div class="h3-tit">奥迪(进口)</div>
                                            <ul class="rank-list-ul" 0="">
                                                
                                                <li id="s650">
                                                <h4><a href="//www.autohome.com.cn/650/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A1</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/650/price.html#pvareaid=101446">20.48-23.48万</a></div><div><a href="//car.autohome.com.cn/price/series-650.html#pvareaid=103446">报价</a> <a id="atk_650" href="//car.autohome.com.cn/pic/series/650.html#pvareaid=103448">图库</a> <a data-value="650" class="" href="//www.che168.com/441900/series650/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-650-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/650/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s370">
                                                <h4><a href="//www.autohome.com.cn/370/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A3(进口)</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/370/price.html#pvareaid=101446">36.98-36.98万</a></div><div><a href="//car.autohome.com.cn/price/series-370.html#pvareaid=103446">报价</a> <a id="atk_370" href="//car.autohome.com.cn/pic/series/370.html#pvareaid=103448">图库</a> <a data-value="370" class="" href="//www.che168.com/441900/series370/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-370-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/370/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s4325">
                                                <h4 class="toolong"><a href="//www.autohome.com.cn/4325/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A3新能源(进口)</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/4325/price.html#pvareaid=101446">39.98-39.98万</a></div><div><a href="//car.autohome.com.cn/price/series-4325.html#pvareaid=103446">报价</a> <a id="atk_4325" href="//car.autohome.com.cn/pic/series/4325.html#pvareaid=103448">图库</a> <a data-value="4325" class="" href="//www.che168.com/441900/series4325/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-4325-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/4325/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2730">
                                                <h4><a href="//www.autohome.com.cn/2730/#levelsource=000000000_0&amp;pvareaid=101594">奥迪S3</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2730/price.html#pvareaid=101446">39.98-39.98万</a></div><div><a href="//car.autohome.com.cn/price/series-2730.html#pvareaid=103446">报价</a> <a id="atk_2730" href="//car.autohome.com.cn/pic/series/2730.html#pvareaid=103448">图库</a> <a data-value="2730" class="" href="//www.che168.com/441900/series2730/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2730-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2730/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s471">
                                                <h4><a href="//www.autohome.com.cn/471/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A4(进口)</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/471/price.html#pvareaid=101446">42.38-46.88万</a></div><div><a href="//car.autohome.com.cn/price/series-471.html#pvareaid=103446">报价</a> <a id="atk_471" href="//car.autohome.com.cn/pic/series/471.html#pvareaid=103448">图库</a> <a data-value="471" class="" href="//www.che168.com/441900/series471/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-471-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/471/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s538">
                                                <h4><a href="//www.autohome.com.cn/538/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A5</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/538/price.html#pvareaid=101446">39.80-64.28万</a></div><div><a href="//car.autohome.com.cn/price/series-538.html#pvareaid=103446">报价</a> <a id="atk_538" href="//car.autohome.com.cn/pic/series/538.html#pvareaid=103448">图库</a> <a data-value="538" class="" href="//www.che168.com/441900/series538/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-538-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/538/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2734">
                                                <h4><a href="//www.autohome.com.cn/2734/#levelsource=000000000_0&amp;pvareaid=101594">奥迪S5</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2734/price.html#pvareaid=101446">67.88-80.38万</a></div><div><a href="//car.autohome.com.cn/price/series-2734.html#pvareaid=103446">报价</a> <a id="atk_2734" href="//car.autohome.com.cn/pic/series/2734.html#pvareaid=103448">图库</a> <a data-value="2734" class="" href="//www.che168.com/441900/series2734/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2734-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2734/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s472">
                                                <h4><a href="//www.autohome.com.cn/472/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A6(进口)</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/472/price.html#pvareaid=101446">45.98-59.98万</a></div><div><a href="//car.autohome.com.cn/price/series-472.html#pvareaid=103446">报价</a> <a id="atk_472" href="//car.autohome.com.cn/pic/series/472.html#pvareaid=103448">图库</a> <a data-value="472" class="" href="//www.che168.com/441900/series472/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-472-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/472/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2736">
                                                <h4><a href="//www.autohome.com.cn/2736/#levelsource=000000000_0&amp;pvareaid=101594">奥迪S6</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2736/price.html#pvareaid=101446">99.98-99.98万</a></div><div><a href="//car.autohome.com.cn/price/series-2736.html#pvareaid=103446">报价</a> <a id="atk_2736" href="//car.autohome.com.cn/pic/series/2736.html#pvareaid=103448">图库</a> <a data-value="2736" class="" href="//www.che168.com/441900/series2736/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2736-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2736/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s740">
                                                <h4><a href="//www.autohome.com.cn/740/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A7</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/740/price.html#pvareaid=101446">59.80-89.80万</a></div><div><a href="//car.autohome.com.cn/price/series-740.html#pvareaid=103446">报价</a> <a id="atk_740" href="//car.autohome.com.cn/pic/series/740.html#pvareaid=103448">图库</a> <a data-value="740" class="" href="//www.che168.com/441900/series740/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-740-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/740/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s2738">
                                                <h4><a href="//www.autohome.com.cn/2738/#levelsource=000000000_0&amp;pvareaid=101594">奥迪S7</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2738/price.html#pvareaid=101446">135.80-135.80万</a></div><div><a href="//car.autohome.com.cn/price/series-2738.html#pvareaid=103446">报价</a> <a id="atk_2738" href="//car.autohome.com.cn/pic/series/2738.html#pvareaid=103448">图库</a> <a data-value="2738" class="" href="//www.che168.com/441900/series2738/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2738-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2738/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s146">
                                                <h4><a href="//www.autohome.com.cn/146/#levelsource=000000000_0&amp;pvareaid=101594">奥迪A8</a><i class="icon12 icon12-xin" title="新"></i></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/146/price.html#pvareaid=101446">87.98-256.80万</a></div><div><a href="//car.autohome.com.cn/price/series-146.html#pvareaid=103446">报价</a> <a id="atk_146" href="//car.autohome.com.cn/pic/series/146.html#pvareaid=103448">图库</a> <a data-value="146" class="" href="//www.che168.com/441900/series146/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-146-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/146/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2739">
                                                <h4><a href="//www.autohome.com.cn/2739/#levelsource=000000000_0&amp;pvareaid=101594">奥迪S8</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2739/price.html#pvareaid=101446">198.80-198.80万</a></div><div><a href="//car.autohome.com.cn/price/series-2739.html#pvareaid=103446">报价</a> <a id="atk_2739" href="//car.autohome.com.cn/pic/series/2739.html#pvareaid=103448">图库</a> <a data-value="2739" class="" href="//www.che168.com/441900/series2739/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2739-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2739/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s593">
                                                <h4><a href="//www.autohome.com.cn/593/#levelsource=000000000_0&amp;pvareaid=101594">奥迪Q5(进口)</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/593/price.html#pvareaid=101446">58.80-61.80万</a></div><div><a href="//car.autohome.com.cn/price/series-593.html#pvareaid=103446">报价</a> <a id="atk_593" href="//car.autohome.com.cn/pic/series/593.html#pvareaid=103448">图库</a> <a data-value="593" class="" href="//www.che168.com/441900/series593/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-593-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/593/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2841">
                                                <h4><a href="//www.autohome.com.cn/2841/#levelsource=000000000_0&amp;pvareaid=101594">奥迪SQ5</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2841/price.html#pvareaid=101446">66.80-66.80万</a></div><div><a href="//car.autohome.com.cn/price/series-2841.html#pvareaid=103446">报价</a> <a id="atk_2841" href="//car.autohome.com.cn/pic/series/2841.html#pvareaid=103448">图库</a> <a data-value="2841" class="" href="//www.che168.com/441900/series2841/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2841-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2841/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s412">
                                                <h4><a href="//www.autohome.com.cn/412/#levelsource=000000000_0&amp;pvareaid=101594">奥迪Q7</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/412/price.html#pvareaid=101446">75.38-104.88万</a></div><div><a href="//car.autohome.com.cn/price/series-412.html#pvareaid=103446">报价</a> <a id="atk_412" href="//car.autohome.com.cn/pic/series/412.html#pvareaid=103448">图库</a> <a data-value="412" class="" href="//www.che168.com/441900/series412/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-412-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/412/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s4460">
                                                <h4><a href="//www.autohome.com.cn/4460/#levelsource=000000000_0&amp;pvareaid=101594">奥迪Q7新能源</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/4460/price.html#pvareaid=101446">92.88-92.88万</a></div><div><a href="//car.autohome.com.cn/price/series-4460.html#pvareaid=103446">报价</a> <a id="atk_4460" href="//car.autohome.com.cn/pic/series/4460.html#pvareaid=103448">图库</a> <a data-value="4460" class="" href="//www.che168.com/441900/series4460/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-4460-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/4460/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s148">
                                                <h4><a href="//www.autohome.com.cn/148/#levelsource=000000000_0&amp;pvareaid=101594">奥迪TT</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/148/price.html#pvareaid=101446">49.98-58.68万</a></div><div><a href="//car.autohome.com.cn/price/series-148.html#pvareaid=103446">报价</a> <a id="atk_148" href="//car.autohome.com.cn/pic/series/148.html#pvareaid=103448">图库</a> <a data-value="148" class="" href="//www.che168.com/441900/series148/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-148-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/148/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2740">
                                                <h4><a href="//www.autohome.com.cn/2740/#levelsource=000000000_0&amp;pvareaid=101594">奥迪TTS</a></h4><div>指导价：<a class="red" href="//www.autohome.com.cn/2740/price.html#pvareaid=101446">65.88-69.88万</a></div><div><a href="//car.autohome.com.cn/price/series-2740.html#pvareaid=103446">报价</a> <a id="atk_2740" href="//car.autohome.com.cn/pic/series/2740.html#pvareaid=103448">图库</a> <a data-value="2740" class="" href="//www.che168.com/441900/series2740/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2740-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2740/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3325">
                                                <h4><a href="//www.autohome.com.cn/3325/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪A0</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3325" href="//car.autohome.com.cn/pic/series/3325.html#pvareaid=103448">图库</a> <a data-value="3325" class="" href="//www.che168.com/441900/series3325/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/3325/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s3276">
                                                <h4><a href="//www.autohome.com.cn/3276/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪S1</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3276" href="//car.autohome.com.cn/pic/series/3276.html#pvareaid=103448">图库</a> <a data-value="3276" class="" href="//www.che168.com/441900/series3276/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3276-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3276/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s926">
                                                <h4><a href="//www.autohome.com.cn/926/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪e-tron</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_926" href="//car.autohome.com.cn/pic/series/926.html#pvareaid=103448">图库</a> <a data-value="926" class="" href="//www.che168.com/441900/series926/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-926-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/926/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2732">
                                                <h4><a href="//www.autohome.com.cn/2732/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪S4</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2732" href="//car.autohome.com.cn/pic/series/2732.html#pvareaid=103448">图库</a> <a data-value="2732" class="" href="//www.che168.com/441900/series2732/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2732-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2732/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s4543">
                                                <h4><a href="//www.autohome.com.cn/4543/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Aicon</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_4543" href="//car.autohome.com.cn/pic/series/4543.html#pvareaid=103448">图库</a> <a data-value="4543" class="" href="//www.che168.com/441900/series4543/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-4543-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/4543/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3669">
                                                <h4><a href="//www.autohome.com.cn/3669/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">Prologue</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3669" href="//car.autohome.com.cn/pic/series/3669.html#pvareaid=103448">图库</a> <a data-value="3669" class="" href="//www.che168.com/441900/series3669/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/3669/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s3313">
                                                <h4><a href="//www.autohome.com.cn/3313/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪A9</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3313" href="//car.autohome.com.cn/pic/series/3313.html#pvareaid=103448">图库</a> <a data-value="3313" class="" href="//www.che168.com/441900/series3313/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3313-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3313/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3350">
                                                <h4><a href="//www.autohome.com.cn/3350/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">allroad</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3350" href="//car.autohome.com.cn/pic/series/3350.html#pvareaid=103448">图库</a> <a data-value="3350" class="" href="//www.che168.com/441900/series3350/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3350-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3350/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2908">
                                                <h4 class="toolong"><a href="//www.autohome.com.cn/2908/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">Crosslane Coupe</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2908" href="//car.autohome.com.cn/pic/series/2908.html#pvareaid=103448">图库</a> <a data-value="2908" class="" href="//www.che168.com/441900/series2908/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/2908/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3287">
                                                <h4><a href="//www.autohome.com.cn/3287/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Q2</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3287" href="//car.autohome.com.cn/pic/series/3287.html#pvareaid=103448">图库</a> <a data-value="3287" class="" href="//www.che168.com/441900/series3287/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3287-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3287/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2264">
                                                <h4><a href="//www.autohome.com.cn/2264/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Q3(进口)</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2264" href="//car.autohome.com.cn/pic/series/2264.html#pvareaid=103448">图库</a> <a data-value="2264" class="" href="//www.che168.com/441900/series2264/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2264-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2264/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s3479">
                                                <h4 class="toolong"><a href="//www.autohome.com.cn/3479/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪TT offroad</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3479" href="//car.autohome.com.cn/pic/series/3479.html#pvareaid=103448">图库</a> <a data-value="3479" class="" href="//www.che168.com/441900/series3479/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/3479/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3894">
                                                <h4 class="toolong"><a href="//www.autohome.com.cn/3894/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">e-tron quattro</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3894" href="//car.autohome.com.cn/pic/series/3894.html#pvareaid=103448">图库</a> <a data-value="3894" class="" href="//www.che168.com/441900/series3894/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/3894/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s4003">
                                                <h4 class="toolong"><a href="//www.autohome.com.cn/4003/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">h-tron quattro</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_4003" href="//car.autohome.com.cn/pic/series/4003.html#pvareaid=103448">图库</a> <a data-value="4003" class="" href="//www.che168.com/441900/series4003/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-4003-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/4003/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s4544">
                                                <h4><a href="//www.autohome.com.cn/4544/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Elaine</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_4544" href="//car.autohome.com.cn/pic/series/4544.html#pvareaid=103448">图库</a> <a data-value="4544" class="" href="//www.che168.com/441900/series4544/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-4544-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/4544/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3305">
                                                <h4><a href="//www.autohome.com.cn/3305/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Q4(进口)</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3305" href="//car.autohome.com.cn/pic/series/3305.html#pvareaid=103448">图库</a> <a data-value="3305" class="" href="//www.che168.com/441900/series3305/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3305-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3305/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s4288">
                                                <h4><a href="//www.autohome.com.cn/4288/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Q8</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_4288" href="//car.autohome.com.cn/pic/series/4288.html#pvareaid=103448">图库</a> <a data-value="4288" class="" href="//www.che168.com/441900/series4288/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-4288-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/4288/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3822">
                                                <h4><a href="//www.autohome.com.cn/3822/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪SQ7</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3822" href="//car.autohome.com.cn/pic/series/3822.html#pvareaid=103448">图库</a> <a data-value="3822" class="" href="//www.che168.com/441900/series3822/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3822-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3822/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3334">
                                                <h4><a href="//www.autohome.com.cn/3334/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Q9</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3334" href="//car.autohome.com.cn/pic/series/3334.html#pvareaid=103448">图库</a> <a data-value="3334" class="" href="//www.che168.com/441900/series3334/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3334-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3334/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3210">
                                                <h4><a href="//www.autohome.com.cn/3210/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">Nanuk</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3210" href="//car.autohome.com.cn/pic/series/3210.html#pvareaid=103448">图库</a> <a data-value="3210" class="" href="//www.che168.com/441900/series3210/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/3210/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2218">
                                                <h4><a href="//www.autohome.com.cn/2218/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">quattro</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2218" href="//car.autohome.com.cn/pic/series/2218.html#pvareaid=103448">图库</a> <a data-value="2218" class="" href="//www.che168.com/441900/series2218/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-2218-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/2218/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s2832">
                                                <h4><a href="//www.autohome.com.cn/2832/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪R18</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2832" href="//car.autohome.com.cn/pic/series/2832.html#pvareaid=103448">图库</a> <a data-value="2832" class="" href="//www.che168.com/441900/series2832/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/2832/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2403">
                                                <h4><a href="//www.autohome.com.cn/2403/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Urban</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2403" href="//car.autohome.com.cn/pic/series/2403.html#pvareaid=103448">图库</a> <a data-value="2403" class="" href="//www.che168.com/441900/series2403/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/2403/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s2415">
                                                <h4><a href="//www.autohome.com.cn/2415/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪A2</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_2415" href="//car.autohome.com.cn/pic/series/2415.html#pvareaid=103448">图库</a> <a data-value="2415" class="" href="//www.che168.com/441900/series2415/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/2415/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3910">
                                                <h4><a href="//www.autohome.com.cn/3910/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪80</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3910" href="//car.autohome.com.cn/pic/series/3910.html#pvareaid=103448">图库</a> <a data-value="3910" class="" href="//www.che168.com/441900/series3910/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/3910/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s3909">
                                                <h4><a href="//www.autohome.com.cn/3909/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Coupe</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3909" href="//car.autohome.com.cn/pic/series/3909.html#pvareaid=103448">图库</a> <a data-value="3909" class="" href="//www.che168.com/441900/series3909/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3909-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3909/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li class="dashline"></li>
                                                
                                                <li id="s3680">
                                                <h4><a href="//www.autohome.com.cn/3680/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪100</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_3680" href="//car.autohome.com.cn/pic/series/3680.html#pvareaid=103448">图库</a> <a data-value="3680" class="" href="//www.che168.com/441900/series3680/?pvareaid=100535">二手车</a> <a href="//club.autohome.com.cn/bbs/forum-c-3680-1.html#pvareaid=103447">论坛</a> <a href="//k.autohome.com.cn/3680/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                                <li id="s787">
                                                <h4><a href="//www.autohome.com.cn/787/#levelsource=000000000_0&amp;pvareaid=101594" class="greylink">奥迪Cross</a></h4>指导价：暂无<div><span class="text-through">报价</span> <a id="atk_787" href="//car.autohome.com.cn/pic/series/787.html#pvareaid=103448">图库</a> <a data-value="787" class="" href="//www.che168.com/441900/series787/?pvareaid=100535">二手车</a> <span class="text-through">论坛</span> <a href="//k.autohome.com.cn/787/#pvareaid=103459">口碑</a></div>
                                                    
                                                </li>
                                                
                                            </ul>
                                            
                                        </dd>
                                    </dl>';

        $ss = '<dl id="33" olr="7">123456</dl>';

        //pattern--------------------------------
        $abc_pattern = '/<div vos="gs" class="uibox" id="(?:\w+)" style(?:=""|="display:none")>(.*?)<\/div>\s*<\/div>/ism';
        $brand_abc_pattern = '/<div class="uibox-title uibox-title-border" data="(?:.*)"><span class="font-letter">(\w{1})<\/span><\/div>/';
        $brand_name_pattern = '/<dl id="(?:\d+)" olr="(?:\d+)">((?!\/li).)*/ism';
        //pattern----------------------------------------

        //1、先以字母区分
        preg_match_all($abc_pattern,$str,$brand_row);
        foreach ($brand_row[0] as $k => $brand_each){
            //2、查询出品牌的字母
            preg_match($brand_abc_pattern,$brand_each,$brand_abc_row);
            $car_info[$k]['brand_abc'] = $brand_abc_row[1];
            //3、以品牌区分
            preg_match_all('/<dl id="(?:\d+)" olr="(?:\d+)">((?!\/dl.)*)/ism',$ss,$brand_name_row);
            var_dump($brand_name_row,$s);
            //、查询改

            break;
        }
//        var_dump($car_info);

//        foreach ($brand_row[1] as $item){
//            var_dump($item);
//        }

//        return view();

        //        $brand_abc_pattern = '/<div class="uibox-title uibox-title-border" data="(?:.*)"><span class="font-letter">(\w{1}?)<\/span><\/div>/';
//        $brand_car_series = '/<h4><a href="https:\/\/www.autohome.com.cn(?:.*)">(.*?)<\/a><\/h4>/im';
//        preg_match_all($brand_abc_pattern,$str,$brand_abc_row);
//        preg_match_all($brand_car_series,$str,$brand_car_series_row);
//        $brand_abc_pattern = '/<dl id="(?:\d+)" olr="(?:\d+)">(^[<\/dl>]*)/is';
    }
}
