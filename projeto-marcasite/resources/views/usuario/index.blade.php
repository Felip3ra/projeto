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

    @forelse ($usuarios as $usuario)

        NOME:{{$usuario->nm_nome}}<br>
        EMAIL:{{$usuario->nm_email}}<br>
        TIPO DE USUARIO:{{$usuario->nm_tipo_de_usuario}}<br>
        SENHA:{{$usuario->nm_curso}}<br>

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