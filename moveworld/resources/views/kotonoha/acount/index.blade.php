@extends('layouts.kotonoha')
@section('title','ACOUNT')
@section('content')
    <p>アカウントページ</p>
    <p>ここでは登録したユーザー名とメールアドレスを確認することができます。</p>
    <!-- Authentication Links -->
    @guest
    <table style='display:inline;'>
        <td>
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </td>
        @if (Route::has('register'))
            <td>
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </td>
        @endif
        @else
        <p>ようこそ{{ Auth::user()->name }}さん</p>
        ユーザー情報<br>
        <tr>
            <td>名前: </td><td>{{ Auth::user()->name }}</td>
        </tr>
        <br>
        <tr>
            <td>email: </td><td>{{ Auth::user()->email }}</td>
        </tr>
    </table>
    @endguest
@endsection
