<?php

namespace App\Http\Controllers\Kotonoha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoveController extends Controller
{
    public function index(){
        return view('kotonoha.move.index');
    }
    //
}
