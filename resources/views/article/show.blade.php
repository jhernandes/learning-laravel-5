@extends('app')

@section('content')

    <div>
        <div class="col-lg-2 col-lg-offset-0">
            @unless ($article->tags->isEmpty())
                <ul class="nav nav-pills nav-stacked">
                    @foreach ($article->tags as $tag)
                        <li role="presentation"><a href=" {!! action('TagsController@show', $tag->name) !!}">{!!  $tag->name !!}</a></li>
                    @endforeach
                </ul>
            @endunless
        </div>
        <div class="col-lg-offset-0 col-lg-8">
            <div class="btn-toolbar " role="toolbar">
                <h1 class="col-lg-offset-0 col-lg-9"> <span>{{ $article->title }}</span></h1>
                <a type="button" class="btn btn-primary btn-lg navbar-right col-lg-3" href=" {{ action('ArticleController@edit', ['id' => $article->id]) }}">
                    <span class="glyphicon glyphicon-text-background" aria-hidden="true"></span> Edit Article
                </a>
            </div>
            <hr/>

            <article>
                {{ $article->body }}
            </article>
            <h3><a href="{{ URL::previous() }}" class="glyphicon glyphicon-arrow-left" aria-hidden="true" role="button"> Back</a></h3>
        </div>
    </div>




@stop