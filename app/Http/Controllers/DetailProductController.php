<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    //
    function loadDetailProductPage(Request $req){
        $id = $req->get('id');
        return view('detail-product');
    }
}
