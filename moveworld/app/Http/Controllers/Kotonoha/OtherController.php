<?php

namespace App\Http\Controllers\Kotonoha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherController extends Controller
{
    public function index(){
        return view('kotonoha.other.index');
    }
    //
}
