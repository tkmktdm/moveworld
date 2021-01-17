@extends('layouts.app')
@section('title','OTHER')
@section('content')
    @guest
        <h3>ログインしたら見れるようになります！</h3>
        <br>
        <p>とりあえず、掲示板みたいなものを実装予定（まだ作れてません；＿；）</p>
    @else
        <p>β版</p>

        <p>user:{{Auth::user()->name}}さん</p> 
        <input type="text" name="name" maxlength="5">
    <button>送信</button>
    @endguest
@endsection
