<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('usuario.index')}}"></a>
    <h1>editar o inscrito</h1>

    <form action="{{route('usuario.store')}}" method="POST">
        @csrf
        <label>Nome</label>
        <input type="text" name="nm_nome" id="nm_nome"><br><br>

        <label>Email</label>
        <input type="email" name="nm_email" id="nm_email"><br><br>

        <label>Tipo de usuario</label>
        <select name="nm_tipo_de_usuario" id="nm_tipo_de_usuario">
            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="associado"></option>
        </select><br><br>

        <label>senha</label>
        <input type="password" name="pw_senha" id="pw_senha"><br><br>

        <!-- <label for="confirma">Empresa</label>
        <input type="password" name="confirma" id="confirma"><br><br> -->

        <button type="submit">Salvar</button>
    </form>
    
</body>
</html>