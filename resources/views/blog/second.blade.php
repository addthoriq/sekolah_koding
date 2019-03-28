@extends('layouts.master')
@section('title', 'Single')
@section('content')
    Ini Contoh eloquent
    <p>Ini Halaman ke {{$vlogs->id}}</p>
    <h1>{{$vlogs->title}}</h1>
    <p>{{$vlogs->isi}}</p>
@endsection
