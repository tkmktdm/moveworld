<?php

namespace App\Http\Controllers\Kotonoha;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$now = $carbon_date->format("y/m/d");
        //$now = '2020-07-06 12:30:59")';
        //$this->middleware('auth');
        //$this->middleware('$now');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('kotonoha.home');
    }
}
