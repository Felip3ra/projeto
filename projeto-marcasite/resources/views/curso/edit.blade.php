<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>editar o curso</h1>

    <form action="{{route('curso.update',['curso' => $curso->id])}}" method="POST">
        @csrf
        @method('PUT')

        <label>Curso</label>
        <input type="text" name="nm_nome" id="nm_nome" value="{{old('nm_nome',$curso->nm_nome)}}"><br><br>

        <label>Descrição</label>
        <input type="text" name="ds_descricao" id="ds_descricao" value="{{old('ds_descricao',$curso->ds_descricao)}}"><br><br>

        <label>Valor</label>
        <input type="number" name="vl_valor" id="vl_valor" value="{{old('vl_valor',$curso->vl_valor)}}"><br><br>

        <label>Data de inicio das inscrições</label>
        <input type="date" name="dt_data_de_inicio" id="dt_data_de_inicio" value="{{old('dt_data_de_inicio',$curso->dt_data_de_inicio)}}"><br><br>

        <label>Data de termino das inscrições</label>
        <input type="date" name="dt_data_de_termino" id="dt_data_de_termino" value="{{old('dt_data_de_termino',$curso->dt_data_de_termino)}}"><br><br>

        <label>Quantidade máxima de inscritos</label>
        <input type="number" name="qt_maximo_de_inscritos" id="qt_maximo_de_inscritos" value="{{old('qt_maximo_de_inscritos',$curso->qt_maximo_de_inscritos)}}"><br><br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>