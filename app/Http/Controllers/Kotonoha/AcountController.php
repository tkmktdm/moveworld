<?php

namespace App\Http\Controllers\Kotonoha;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

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
