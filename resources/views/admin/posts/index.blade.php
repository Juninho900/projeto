<h1>Index</h1>

@foreach ($posts as $post)
    <p>
        {{ $post -> nome }}
        [ <a href="{{ url('posts', $post->id) }}">Ver</a> ]
    </p>
@endforeach 