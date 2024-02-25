<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if(session('success'))
    <span style="color: #082;">


        {{session('success')}}
    </span>
    @endif

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

        <a href="{{route('usuario.show',['usuario' => $usuario->id])}}">Visualizar</a>
        <a href="{{route('usuario.edit',['usuario' => $usuario->id])}}">Editar</a><br>

        <form action="{{route('usuario.destroy',['usuario' => $usuario->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que você deseja apagar esse registro?')">Apagar</button>
        </form>
        <hr>
        <br>
    @empty
    <span style="color: #ff0000;">Nenhuma conta encontrada!</span>
    @endforelse
</body>
</html>