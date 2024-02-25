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
        <label>Nome</label>
        <input type="text" name="nm_nome" id="nm_nm"><br><br>

        <label>Descrição</label>
        <input type="text" name="ds_descricao" id="ds_descricao"><br><br>

        <label>Valor</label>
        <input type="number" name="vl_valor" id="vl_valor"><br><br>

        <label>Data de inicio das inscrições</label>
        <input type="date" name="dt_data_de_inicio" id="dt_data_de_inicio"><br><br>

        <label>Data de termino das inscrições</label>
        <input type="date" name="dt_data_de_termino" id="dt_data_de_termino"><br><br>

        <label>Quantidade máxima de inscritos</label>
        <input type="number" name="qt_maximo_de_inscritos" id="qt_maximo_de_inscritos"><br><br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>