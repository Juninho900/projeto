<h1>CADASTRO</h1>

<form action="{{ route('posts.store') }}" method="post">
    <p>Nome: <input type="text" name="nome" id="nome"></p>
    <p>E-mail: <input type="email" name="email" id="email"></p>
    <p>Telefone: <input type="text" name="telefone" id="telefone"></p>
    <p>Data de nascimento: <input type="date" name="dtNasc" id="dtNasc"></p>
    <label for="situacao">Situação: </label>
    <select name="situacao" id="situacao">
        <option value="ativo">Ativo</option>
        <option value="inativo">Inativo</option>
    </select>
    <p>RA: <input type="text" name="ra" id="ra"></p>
    <button type="submit">Cadastrar</button>
</form>