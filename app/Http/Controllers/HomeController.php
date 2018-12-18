<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Respone;
use \Validator;

class HomeController extends Controller
{
    //
    function loadHomePage(){
        return view('home');
    }
    function loadLoginPage(){
        return view('layouts.login');
    }

    function checkLogin(Request $req){
        $rules = ['username'=>'min:6 | max:18 | not_regex:/[\s]/',
                  'password'=>'min:6 | regex:/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])/'];

        $message = ['username.min'=>'Tên đăng nhập ít nhất phải 6 kí tự',
                    'username.max'=>'Tên đăng nhập tối đa chỉ được 16 kí tự',
                    'username.not_regex'=>'Tên đăng nhập không hợp lệ',
                    'password.min'=>'Mật khẩu ít nhất phải 6 kí tự',
                    'password.regex'=>'Mật khẩu phải chứa ít nhất 1 chữ cái Hoa, 1 chữ cái thường và 1 số'];
                    $validator = Validator::make($req->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all());
        }else dd($req->all());
    }
}