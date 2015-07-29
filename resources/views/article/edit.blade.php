@extends('app');

@section('content')
    <div class="col-lg-offset-3 col-lg-6">
        <h1>Editing: {{ $article->title }}</h1>
        <hr/>

        {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}

            @include('article.partials.form', ['submitButtonText' => 'Update Article'])

        {!! Form::close() !!}
    <div>

    @include('errors.error')
@stop