<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AcountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $users = User::All();
        return view('kotonoha.acount.index', ['users' => $users]);
    }
}
