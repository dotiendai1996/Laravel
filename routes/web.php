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

Route::get('/', function () {
    return view('welcome');
});


Route::get('trangchu', 'HomeController@loadHomePage');
Route::get('dang-nhap-tai-khoan','HomeController@loadLoginPage');
Route::post('dang-nhap-tai-khoan','HomeController@checkLogin')->name('checkLogin');

Route::get('san-pham/{id}','DetailProductController@loadDetailProductPage')->where('id','[0-9]+');