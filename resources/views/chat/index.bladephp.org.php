@extends('layouts.app')
@section('footer-textchat')
    <table>
    <tr><th>Data</th></tr>
    @foreach($items ?? '' as $item)
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    @endforeach
    </table>
@endsection
