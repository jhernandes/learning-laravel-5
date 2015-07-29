@extends('app')

@section('content')

    <div>
        <div class="col-lg-2">
            @include('article.partials.tags')
        </div>
        <div class="col-lg-offset-0 col-lg-8">
            <div class="btn-toolbar" role="toolbar">
                <h1 class="col-lg-offset-0 col-lg-4"> <span class="label label-default">Articles</span></h1>
                <a type="button" class="btn btn-primary btn-lg col-lg-3 navbar-right" href=" {{ action('ArticleController@create') }}">
                    <span class="glyphicon glyphicon-text-background" aria-hidden="true"></span> New Article
                </a>
            </div>
            <hr/>

            @foreach($articles as $article)
                <article>
                    <h2>
                        <a href="{{ action('ArticleController@show', [$article->id]) }}">  {{ $article->title }} </a>
                    </h2>
                </article>

                <div class="body"> {{ $article->body }}</div>
            @endforeach
        </div>
    </div>


@stop