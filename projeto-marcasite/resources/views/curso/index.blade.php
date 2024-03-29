<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resources/css/index.css" />


    <style>
        .tabela {
            margin-left: 5%;
            padding: 20px 20px 20px 20px;
            background-color: rgb(255, 255, 255);
            border: 6px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            width: 80%;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px 20px 20px 40px;
            border: 4px solid #000000;
            /* border-radius: 25px; */
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f1d0aa;
        }

        tr {
            background-color: white;
        }

        .editar {
            background-color: green;
            margin-right: 2px;
            padding: 10px 15px;
            border: 3px #000000 solid;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .visualizar {
            background-color: blue;
            margin-right: 2px;
            padding: 10px 15px;
            border: 3px #000000 solid;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .excluir {
            margin-right: 2px;
            background-color: red;
            padding: 10px 15px;
            border: 3px #000000 solid;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        a {
            color: white;
            text-decoration: none;
        }

        .acoes {
            display: flex;
        }

        .button-back {
            background-color: orange;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;

            width: 60px;
            margin-top: 20px;
            text-align: center;
        }
    </style>

</head>

<body>
    <h1>Listar cursos</h1>
    @if(session('success'))
    <span style="color: #082;">


        {{session('success')}}
    </span>
    @endif


    <div class="tabela">

        <table>

            <tr>
                <th>Nome do Curso</th>
                <th>Descricao</th>
                <th>Valor</th>
                <th>Dt. Inicio</th>
                <th>Dt. Termino</th>
                <th>Qtd. Maxima</th>
                <th>Ações</th>
            </tr>

            @forelse ($cursos as $curso)
            <tr>
                <td>{{$curso->nm_nome}}</td>
                <td>{{$curso->ds_descricao}}</td>
                <td>{{$curso->vl_valor}}</td>
                <td>{{$curso->dt_data_de_inicio}}</td>
                <td>{{$curso->dt_data_de_termino}}</td>
                <td>{{$curso->qt_maximo_de_inscritos}}</td>
                <td style="width: 300px">
                    <ul class="acoes">
                        <button class="visualizar">
                            <a href="{{route('curso.show',['curso' => $curso->id])}}">Visualizar</a>
                        </button>
                        <button class="editar">
                            <a href="{{route('curso.edit',['curso' => $curso->id])}}">Editar</a>
                        </button>

                        <form action="{{route('curso.destroy',['curso' => $curso->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="excluir"
                                onclick="return confirm('Tem certeza que você deseja apagar esse registro?')">Apagar</button>
                        </form>
                    </ul>

                </td>
            </tr>

            @empty
            <tr>
                <td colspan="7">
                    <span style="color: #ff0000;">Nenhuma conta encontrada!</span>
                </td>
            </tr>
            @endforelse
        </table>

        <button type="reset" class="button-back">
        <a href="{{route('welcome')}}">Voltar</a>
        </button>

    </div>

    @forelse ($cursos as $curso)
    <form action="{{route('curso.destroy',['curso' => $curso->id])}}" method="post">
        @csrf
        @method('delete')
    </form>
    @empty
    @endforelse
    <hr>
    <br>

</body>

</html>