<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(Request $request){
        return view('kotonoha.top.index',['data'=>$request->data]);
    }
    //
}
