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
    <a href="{{route('home')}}"><img style='width:50%; float:left;'src="{{asset('/assets/images/004_aoismail1.png')}}" alt='aoi'></a>
    <a href="{{route('home')}}"><img style='width:50%;' src="{{asset('/assets/images/004_akanesmail1.png')}}" alt='akane'></a>
    @include('components.message')
    @include('previews.top-preview')
@endsection
@section("footer")
endline
@endsection
