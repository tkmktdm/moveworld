<?php

namespace App\Http\Controllers\Kotonoha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function index(){
        return view('kotonoha.info.index');
    }
    //
}
