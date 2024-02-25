<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('usuario.index')}}">Listar</a>
    <h1>detalhes do usuario</h1>
    @if(session('success'))
    <span style="color: #082;">


        {{session('success')}}
    </span>
    @endif
        NOME:{{$usuario->nm_nome}}<br>
        EMAIL:{{$usuario->nm_email}}<br>
        TIPO DE USUARIO:{{$usuario->nm_tipo_de_usuario}}<br>
        SENHA:{{$usuario->pw_senha}}<br>
</body>

</html>