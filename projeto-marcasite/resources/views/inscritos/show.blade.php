<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('inscrito.index')}}">Listar</a>
    <h1>detalhes do inscrito</h1>
    @if(session('success'))
    <span style="color: #082;">


        {{session('success')}}
    </span>
    @endif
        NOME:{{$inscrito->nm_nome}}<br>
        EMAIL:{{$inscrito->nm_email}}<br>
        CPF:{{$inscrito->cd_cpf}}<br>
        ENDEREÇO:{{$inscrito->nm_endereco}}<br>
        EMPRESA:{{$inscrito->nm_empresa}}<br>
        TELEFONE:{{$inscrito->tl_telefone}}<br>
        CELULAR:{{$inscrito->tl_celular}}<br>
        TIPO DE USUARIO:{{$inscrito->nm_tipo_de_usuario}}<br>
        CURSO:{{$inscrito->nm_curso}}<br>
</body>

</html>