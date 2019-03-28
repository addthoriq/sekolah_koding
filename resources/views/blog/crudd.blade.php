@extends('layouts.master')
@section('title', 'CRUD ELOQUENT')
@section('content')
    @foreach ($flogs as $flog)
        <h1>{{$flog->title}}</h1>
        <p>{{$flog->isi}}</p>
    @endforeach
@endsection
