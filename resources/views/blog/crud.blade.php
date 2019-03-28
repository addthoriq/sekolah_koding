@extends('layouts.master')
@section('title', 'CRUD ELOQUENT')
@section('content')
    @foreach ($flogs as $flog)
        <li> <a href="/crud/{{$flog->id}}">{{$flog->title}}</a> </li>
    @endforeach
@endsection
