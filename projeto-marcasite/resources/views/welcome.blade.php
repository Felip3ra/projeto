<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto</title>
        
    </head>
    <body>
        <h1>Bem vindo</h1>

        <a href="{{route('inscrito.index')}}">Listar os inscritos</a>
    </body>
</html>
