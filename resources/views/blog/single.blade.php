@extends('layouts.master')
@section('title', 'Single')

{!! $unescaped !!}

@section('content')
    <h1>{{$blog}}</h1>

    <h4>ini array</h4>
    @foreach ($arrays as $array)
        <li> {{$array}} </li>
    @endforeach
    <br>

    <h4>Ini dari database Field email</h4>
    @foreach ($databases as $database)
        <li> {{$database->email}} </li>
    @endforeach
    <br>

    <h4>Ini dari database Field Password</h4>
    @foreach ($databases as $database)
        <li>{{{$database->password}}}</li>
    @endforeach
    <br>

    <h4>Query where</h4>
    @foreach ($wheres as $where)
        <li> {{$where->email}} </li>
    @endforeach
    <br>

    <h4>Query where like</h4>
    @foreach ($likes as $like)
        <li> {{$like->nama}} </li>
    @endforeach
    <br>

    <h4>ini if and else</h4>
    @if (count($arrays) < 2)
        User ada 2
        @else
            User lebih dari 2
    @endif
@endsection
