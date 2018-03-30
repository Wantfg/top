<?php

namespace App\Http\Controllers\Market;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $products = array(1,2,3,4,5,6,7,8,9,10,11,12);

        return view('market.index')->with('products',$products);
    }

    public function product($p_id)
    {
        if($p_id > 13){
            return redirect()->action('Market\IndexController@index');
        }

        return view('market.product');

    }
}
