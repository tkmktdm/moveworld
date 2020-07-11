<?php

namespace App\Http\Controllers\Kotonoha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TopController extends Controller
{
    public function index(Request $request){
        return view('kotonoha.top.index',['data'=>$request->data]);
    }
    //
}
