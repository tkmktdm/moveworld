@extends('layouts.app')
@section('title','ACOUNT')
@section('content')
    <p>アカウントページ</p>
    <!-- Authentication Links -->
    @guest
    <table>
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
        <button>更新する</button>
    </table>
    @endguest
@endsection
