@extends('app')

@section('content')
    <h1> {{ $article->title }} </h1>

    <hr/>

    <h2> {{ $article->body }}</h2>
@stop