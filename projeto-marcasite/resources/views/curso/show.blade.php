<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>detalhes dos cursos</h1>
    @if(session('success'))
    <span style="color: #082;">


        {{session('success')}}
    </span>
    @endif
        Curso:{{$curso->nm_nome}}<br>
        Descrição:{{$curso->ds_descricao}}<br>
        Valor:{{$curso->vl_valor}}<br>
        Data de início das inscrições:{{$curso->dt_data_de_inicio}}<br>
        Data de termino das inscrições:{{$curso->dt_data_de_termino}}<br>
        Quantida máxima de inscritos:{{$curso->qt_maximo_de_inscritos}}<br>
        
</body>
</html>