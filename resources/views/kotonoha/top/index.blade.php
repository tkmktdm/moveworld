@extends('layouts.kotonoha')

@section("title","KOTOHAPEY")

<!--@section("menubar")
    @parent
    indexpage
@endsection
-->
@section("content")
    <table style= 'display:inline-block; margin:20px;'>
    @foreach($data as $item)
    <tr><th>{{$item['name']}}</th><td>{{$item['user']}}</td></tr>
    @endforeach
    </table> 

    <h2>琴葉姉妹誕生祭！！</h2>
    <h2>今年で6周年やでぇ！！</h2>
    <div>
        <a style='margin:0' href="{{route('kotonoha.home')}}"><img style='width:50%; float:left;'src="{{asset('/assets/images/004_aoismail1.png')}}" alt='aoi'></a>
        <a style='margin:0' href="{{route('kotonoha.home')}}"><img style='width:50%;' src="{{asset('/assets/images/004_akanesmail1.png')}}" alt='akane'></a>
    </div>
    @include('components.message')
    @include('previews.top-preview')
@endsection
@section("footer")
endline
@endsection
