<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo curso</h1>

    <form action="{{route('curso.store')}}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao"><br><br>

        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor"><br><br>

        <label for="dt_inicio">Data de inicio das inscrições</label>
        <input type="date" name="dt_inicio" id="dt_inicio"><br><br>

        <label for="dt_termino">Data de termino das inscrições</label>
        <input type="date" name="dt_termino" id="dt_termino"><br><br>

        <label for="maximo">Quantidade máxima de inscritos</label>
        <input type="number" name="maximo" id="maximo"><br><br>

        <label for="upload">Nome</label>
        <input type="file" name="upload" id="upload"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>