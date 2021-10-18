<h1>Informação do(a) aluno(a) {{ $post->nome }}</h1>

<ul>
    <li><strong>E-mail:</strong> {{ $post->email }}</li>
    <li><strong>Telefone:</strong> {{ $post->telefone }}</li>
    <li><strong>Data de nascimento:</strong> {{ $post->dtNasc }}</li>
    <li><strong>Situação:</strong> {{ $post->ativo }}</li>    
    <li><strong>RA:</strong> {{ $post->ra }}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Remover</button>
</form>