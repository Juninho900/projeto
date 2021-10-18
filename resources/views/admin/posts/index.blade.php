<h1>Index</h1>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<form action="{{ route('posts.search') }}" method="post">
    @csrf
    <input type="text" name="search" placeholder="Buscar">
    <button type="submit">Buscar</button>
</form>

@foreach ($posts as $post)
    <p>
        {{ $post -> nome }}
        <a href="{{ route('posts.show', $post->id) }}">Ver</a>
        <a href="{{ route('posts.edit', $post->id) }}">Editar</a>
    </p>
@endforeach

@if (isset($filters))
    {{ $posts->appends(filters)->links() }}
@else
    {{ $posts->links() }}
@endif