@extends('layouts.app')
@include('template.header')
@section('title','OTHER')
@section('content')
    <p>login</p>
    <table>
    <tr>
        <td>ID [ mail ]: </td>
        <td><input type="text" name="name" maxlength="5"></td>
    </tr>
    <tr>
        <td>password: </td>
        <td><input type="password" name="pass"  maxlength="6"></td>
    </tr>
    </table>
    <button>送信</button>

@endsection
