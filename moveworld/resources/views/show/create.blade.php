@extends('layouts.default')
@section("title","HOME")
<!--@section("menubar")
    @parent
    indexpage
@endsection
-->
@section("content")
    <div style='position: absolute; z-index: -1;'>
        <a href="{{route('home')}}"><img style='width:30%; float:left;'src="{{asset('/assets/images/004_aoismail1.png')}}" alt='aoi'></a>
        <a href="{{route('home')}}"><img style='width:30%; float:right;' src="{{asset('/assets/images/004_akanesmail1.png')}}" alt='akane'></a>
    </div>

    <form action="{{ action('ShowController@create') }}" method='post'>
        {{ csrf_field() }}
        <div style='margin: 30px; text-align: center; z-index: 1;'>
            <p style='margin: 10px'>記事のタイトル</p><input name='title' type='text' style='width:50%'>
        <!--
        <p>本文</p><input name='content' type='text'>
        -->
            <p style='margin:10px'>本文</p>
            <p><textarea name='content' cols='100' style='height: 500px'>本文</textarea></p>
            <button>送信</button>
    </form>
    <!--
    <a href="{{route('home')}}"><img style='width:50%; float:left;'src="{{asset('/assets/images/004_aoismail1.png')}}" alt='aoi'></a>
    <a href="{{route('home')}}"><img style='width:50%;' src="{{asset('/assets/images/004_akanesmail1.png')}}" alt='akane'></a>
    -->


@endsection
