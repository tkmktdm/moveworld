@extends('layouts.app')
@section('footer-textchat')
        投稿作成<br>

    <form action='{{ route('chat_create') }}' method='post'>
        {{ csrf_field() }}
            タイトル：<input type='text' name='title'><br>
            内容：<input type='text' name='content'><br>
            <input type='submit' value='投稿'>
    </form>
@endsection
@endsection
