@extends('layouts.kotonoha')
@section('content')
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
            ユーザー情報<br>
            <tr>
                <td>名前</td>
                <th>email</th>
            </tr>    
            <br>
            <tr>
                <td>{{ Auth::user()->name }}</td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
    </table>
@endguest
@endsection
