@extends('app')

@section('content')
    <h1> {{ $stock->description }} </h1>

    <hr/>

    <h2> {{ $stock->quantity }}</h2>
@stop