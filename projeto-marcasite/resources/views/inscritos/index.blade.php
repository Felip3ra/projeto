<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @forelse ($inscritos as $inscrito)

        NOME:{{$inscrito->nm_nome}}<br>
        EMAIL:{{$inscrito->nm_email}}<br>
        CPF:{{$inscrito->cd_cpf}}<br>
        ENDEREÇO:{{$inscrito->nm_endereco}}<br>
        EMPRESA:{{$inscrito->nm_empresa}}<br>
        TELEFONE:{{$inscrito->tl_telefone}}<br>
        CELULAR:{{$inscrito->tl_celular}}<br>
        TIPO DE USUARIO:{{$inscrito->nm_tipo_de_usuario}}<br>
        CURSO:{{$inscrito->nm_curso}}<br>

        <a href="{{route('inscrito.show',['inscrito' => $inscrito->id])}}">Visualizar</a>
        <a href="{{route('inscrito.edit',['inscrito' => $inscrito->id])}}">Editar</a><br>
        <hr>
        <br>
    @empty
    <span style="color: #ff0000;">Nenhuma conta encontrada!</span>
    @endforelse
</body>
</html>