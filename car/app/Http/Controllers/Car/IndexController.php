<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    protected $theme_nam = 'car';
    public function index()
    {
        return view($this->theme_nam.'.index');
    }

    public function brandLists()
    {
        $lists = DB::table('car_brand')->get();

        return view($this->theme_nam.'.brand_lists')->with('lists',$lists);
    }
}
