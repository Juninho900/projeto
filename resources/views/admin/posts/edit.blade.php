<h1>Editar a informação do(a) aluno(a) {{ $post->nome }}</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf 
    @method('put')
    <p>Nome: <input type="text" name="nome" id="nome" value="{{ $post->nome }}"></p>
    <p>E-mail: <input type="email" name="email" id="email" value="{{ $post->email }}"></p>
    <p>Telefone: <input type="text" name="telefone" id="telefone" value="{{ $post->telefone }}"></p>
    <p>Data de nascimento: <input type="date" name="dtNasc" id="dtNasc" value="{{ $post->dtNasc }}"></p>
    <label for="ativo">Situação: </label>
    <select name="ativo" id="ativo" value="{{ $post->ativo }}">
        <option value="1">Ativo</option>
        <option value="0">Inativo</option>
    </select>
    <p>RA: <input type="text" name="ra" id="ra" value="{{ $post->ra }}"></p>
    <button type="submit">Atualizar</button>
</form>