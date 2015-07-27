@extends('app');

@section('content')
    <h1>Edit: {{ $article->title }}</h1>
    <hr/>

    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticleController@update', $article->id]]) !!}

        @include('article.partials.form', ['submitButtonText' => 'Update Article'])

    {!! Form::close() !!}

    @include('errors.error')
@stop