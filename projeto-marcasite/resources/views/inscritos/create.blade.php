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

    <form action="{{route('inscrito.store')}}" method="POST">
        <label>Nome</label>
        <input type="text" name="nome" id="nome"><br><br>

        <label>Email</label>
        <input type="email" name="email" id="email"><br><br>

        <label>CPF</label>
        <input type="number" name="cpf" id="cpf"><br><br>

        <label>Endereço</label>
        <input type="text" name="endereco" id="endereco"><br><br>

        <label>Empresa</label>
        <input type="text" name="empresa" id="empresa"><br><br>

        <label>telefone</label>
        <input type="tel" name="telefone" id="telefone"><br><br>

        <label>celular</label>
        <input type="tel" name="celular" id="celular"><br><br>

        <label>Tipo de usuario</label>
        <select name="tipo" id="tipo">
            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="associado"></option>
        </select><br><br>

        <label>curso</label>
        <select name="curso" id="curso">
            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="associado"></option>
        </select><br><br>

        <label>senha</label>
        <input type="password" name="senha" id="senha"><br><br>

        <!-- <label for="confirma">Empresa</label>
        <input type="password" name="confirma" id="confirma"><br><br> -->

        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>