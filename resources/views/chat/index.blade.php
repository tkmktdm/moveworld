@extends('layouts.app')
@section('footer-textchat')
    投稿一覧<br>
    <table>
        <tr><th>ユーザーID</th><th>名前</th><th>タイトル</th><th>内容</th></tr>
    @foreach($chats as $chat)
        <p>{{$chats}}</p>
        <tr>
            <td>{{ $chat->user_id }}</td>
            <!--<td>{ { $chat->user->name }}</td>-->
            <td>{{ $chat->title }}</td>
            <td>{{ $chat->content }}</td>
            @auth
                @if( ( $chat->user_id ) === ( Auth::user()->id ) )
                    <td><a href="{{ route('chat_edit') }}?id={{ $chat->id }}">編集</a></td>
                    <td><a href="{{ route('chat_delete') }}?id={{ $chat->id }}">削除</a></td>
                @endif
            @endauth
        </tr>
    @endforeach
    </table>
@endsection
