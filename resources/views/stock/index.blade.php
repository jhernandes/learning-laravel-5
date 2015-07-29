@extends('app')

@section('content')
    <h1> Product Stocks </h1>

    <hr/>
    @foreach($stocks as $stock)
        <article>
            <h2>
                <a href="{{action('StockController@show', [$stock->id])}}"> {{ $stock->description }}</a>
            </h2>
        </article>

        <div class="body"> {{ $stock->created_at }}</div>
    @endforeach
@stop