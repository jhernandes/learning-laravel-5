@extends('app');

@section('content')
    <h1 class="col-lg-offset-3 col-lg-6">Write a New Article</h1>
    <hr class="col-lg-offset-3 col-lg-6"/>

    <div class="col-lg-offset-3 col-lg-6">
        {!! Form::model($article = new \App\Article, [ 'url' => 'article']) !!}

        @include('article.partials.form', ['submitButtonText' => 'Add Article'])

        {!! Form::close() !!}
    </div>

    @include('errors.error')
@stop