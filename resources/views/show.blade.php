@extends('layout.app')

@section('content')
    <h1>Ini adalah artikel : {{$title}}</h1>
    <a href="/article">Back to article</a>
    <a href="/">Back to home</a>
@endsection
