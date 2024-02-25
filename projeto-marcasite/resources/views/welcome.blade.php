<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projeto</title>


    <style>
        body {
            margin: 0;
            display: grid;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(29, 26, 26);
        }

        .container {
            display: flex;
            flex-direction: row;

            max-width: 1200px;
            /* margin: 0 auto; */
            padding: 20px;
            /* margin-right: 700px; */
        }

        .tittle-header {
            text-align: center;
            font-weight: 300;
            font-style: italic;
            background-color: lightgrey;
            height: 100px;
        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            /* Permitir que os botões quebrem para a próxima linha em telas menores */
            flex-direction: column;
            justify-content: space-evenly;
            text-align: center;

            border-radius: 6px;
            background-color: #616060;

            padding: 10px;
            width: 200px;
            margin-left: 20%;
        }

        .menu button {
            background-color: orange;
            color: black;
            font-size: 14px;
            font-weight: 300;
            margin: 5px;
            padding: 10px;
            border: 3px solid black;
            cursor: pointer;
            flex: 1;
            /* Distribuir espaço igualmente entre os botões */
        }

        .menu button:hover {
            background-color: #777;
        }

        .menu button:active {
            transform: translateY(1px);
        }

        a{
            color: black;
        }

    </style>

</head>

<body>
    <div class="tittle-header">
        <h1>Projeto: Marcasite Cursos</h1>
    </div>

    <div class="container">
        <div class="menu">
            <button type="button" ><a href="{{route('inscrito.create')}}">Inscrições</a></button>
            <button type="button" ><a href="{{route('inscrito.index')}}">Listar/Editar inscrições</a></button>
            <button type="button" ><a href="{{route('curso.create')}}">Novo curso</a></button>
            <button type="button" ><a href="{{route('curso.index')}}">Lista de cursos</a></button>
            <button type="button" ><a href="{{route('usuario.create')}}">Cadastro de Usuários</a></button>
        </div>




    </div>
</body>

</html>