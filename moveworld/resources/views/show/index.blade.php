@extends('layouts.default')
@section("title","HOME")
<!--@section("menubar")
    @parent
    indexpage
@endsection
-->
@section("content")
    <table style= 'display:inline-block; margin:20px;'>
    <p>Show table</p>
    </table> 
    <a href="{{route('home')}}"><img style='width:10%; float:left;'src="{{asset('/assets/images/004_aoismail1.png')}}" alt='aoi'></a>
    <a href="{{route('home')}}"><img style='width:10%; float:right;' src="{{asset('/assets/images/004_akanesmail1.png')}}" alt='akane'></a>
    <p><a href="{{route('show.create')}}">作成フォームに移動する</a></p>
    @include('components.message')
    @include('previews.top-preview')
@endsection
@section("footer")
endline
@endsection
