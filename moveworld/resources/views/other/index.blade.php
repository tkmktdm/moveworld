@extends('layouts.app')
@section('title','OTHER')
@section('content')

@endsection
@section('footer-textchat')

    @guest
    @else
    <p>β版</p>

        <p>text</p> 
        <input type="text" name="name" maxlength="5">
    <button>送信</button>
    @endguest
@endsection