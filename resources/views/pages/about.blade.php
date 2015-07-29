@extends('app')

@section('content')
<div id="about" align="center">
    <h1> About Me! </h1>
    <h2> {{ $name }}, {{ $idade }} anos</h2>
    <div>
        <p>
            <h3> {{ $email }} </h3>
            <h3> {{ $telefone }} </h3>
        </p>
    </div>
</div>
@stop