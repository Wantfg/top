<?php

namespace App\Http\Controllers\Car;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $str = file_get_contents(asset('files/brands.txt'));
        var_dump($str) ;
//        return view();
    }
}
