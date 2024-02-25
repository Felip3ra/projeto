<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('inscrito.index')}}"></a>
    <h1>editar o inscrito</h1>

    <form action="{{route('inscrito.update',['inscrito' => $inscrito->id])}}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome</label>
        <input type="text" name="nm_nome" id="nm_nome" value="{{old('nm_nome',$inscrito->nm_nome)}}"><br><br>

        <label>Email</label>
        <input type="email" name="nm_email" id="nm_email" value="{{old('nm_email',$inscrito->nm_email)}}"><br><br>

        <label>CPF</label>
        <input type="number" name="cd_cpf" id="cd_cpf" value="{{old('cd_cpf',$inscrito->cd_cpf)}}"><br><br>

        <label>Endereço</label>
        <input type="text" name="nm_endereco" id="nm_endereco" value="{{old('nm_endereco',$inscrito->nm_endereco)}}"><br><br>

        <label>Empresa</label>
        <input type="text" name="nm_empresa" id="nm_empresa" value="{{old('nm_empresa',$inscrito->nm_empresa)}}"><br><br>

        <label>telefone</label>
        <input type="tel" name="tl_telefone" id="tl_telefone" value="{{old('tl_telefone',$inscrito->tl_telefone)}}"><br><br>

        <label>celular</label>
        <input type="tel" name="tl_celular" id="tl_celular" value="{{old('tl_celular',$inscrito->tl_celular)}}"><br><br>

        <label>Tipo de usuario</label>
        <select name="nm_tipo_de_usuario" id="nm_tipo_de_usuario" value="{{old('nm_tipo_de_usuario',$inscrito->nm_tipo_de_usuario)}}">
            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="associado"></option>
        </select><br><br>

        <label>curso</label>
        <select name="nm_curso" id="nm_curso" value="{{old('nm_curso',$inscrito->nm_curso)}}">
            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="associado"></option>
        </select><br><br>

        <label>senha</label>
        <input type="password" name="pw_senha" id="pw_senha" value="{{old('pw_senha',$inscrito->pw_senha)}}"><br><br>

        <!-- <label for="confirma">Empresa</label>
        <input type="password" name="confirma" id="confirma"><br><br> -->

        <button type="submit">Salvar</button>
    </form>
</body>
</html>