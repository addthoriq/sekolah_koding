@extends('layouts.master')
@section('title', 'HOME')
@section('content')
    <h1>ini home</h1>
    <br>
    <br>
    @foreach ($blogs as $blog)
        <hr>
        <br>
        <h2> <a href="/second/{{$blog->id}}"> {{$blog->title}} </a> </h2>
        <p>{{$blog->isi}}</p>
    @endforeach
@endsection
