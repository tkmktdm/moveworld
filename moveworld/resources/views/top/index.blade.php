@extends('layouts.app')
@section("title","HOME")
@section("menubar")
    @parent
    indexpage
@endsection
@section("content")
    <table>
    @foreach($data as $item)
    <tr><th>{{$item['name']}}</th><td>{{$item['user']}}</td></tr>
    @endforeach
    </table>
    <p>本文です</p>
    <p>必要なだけ+する</p>
    <a href="{{url('/')}}"><img src="{{asset('/assets/images/aoimini.png')}}" alt="aoi"></a>
    @include('components.message')
    @include('previews.top-preview')
@endsection
@section("footer")
endline
@endsection
