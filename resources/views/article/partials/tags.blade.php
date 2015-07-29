@unless($tags->isEmpty())
    <ul class="nav nav-pills nav-stacked">
        @foreach ($tags as $tag)
            <li role="presentation"><a href=" {!! action('TagsController@show', $tag->name) !!}">{!!  $tag->name !!}</a></li>
        @endforeach
    </ul>
@endunless