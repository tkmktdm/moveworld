@extends('layouts.default')
@section("title","HOME")
<!--@section("menubar")
    @parent
    indexpage
@endsection
-->
@section("content")
    <div style='margin: 30px; text-align: center'>
        <p style='margin: 10px'>記事のタイトル</p><input name='title' type='text' style='width:86%'>
        <!--
        <p>本文</p><input name='content' type='text'>
        -->
        <p style='margin:10px'>本文</p>
        <p><textarea name='content' cols='100'>本文</textarea></p>
        
        <button>送信</button>
    </div>
    <br>
    <a href="{{route('home')}}"><img style='width:50%; float:left;'src="{{asset('/assets/images/004_aoismail1.png')}}" alt='aoi'></a>
    <a href="{{route('home')}}"><img style='width:50%;' src="{{asset('/assets/images/004_akanesmail1.png')}}" alt='akane'></a>
@endsection
