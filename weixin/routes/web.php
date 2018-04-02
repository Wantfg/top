<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::redirect('/', '/market',301);
Route::get('/','Market\IndexController@index');
Route::get('market','Market\IndexController@index');
Route::get('market/product/{p_id?}','Market\IndexController@product');

//微信公众号入口
Route::any('api/wx','Api\WxController@index');