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
</body>

</html>