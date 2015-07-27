@extends('app')

@section('content')
    <h1> Articles </h1>

    <hr/>
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ action('ArticleController@show', [$article->id]) }}">  {{ $article->title }} </a>
            </h2>
        </article>

        <div class="body"> {{ $article->body }}</div>
    @endforeach
@stop