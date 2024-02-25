<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
            margin-right: 60%;
            text-align: center;
        }

        .button-arq {
            background-color: orange;
            color: #000000;
            padding: 10px 15px;
            border: 3px solid #000000;
            border-radius: 4px;
            cursor: pointer;
            width: 100px;
            text-align: center;
            margin-left: 5px
        }

        /* Estilo básico para o select */
        select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
        }

        /* Estilizando a seta do select */
        select::-ms-expand {
            display: none;
        }

        /* Adicionando estilo quando o select está focado */
        select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Estilizando as opções dentro do select */
        select option {
            background-color: #fff;
            color: #333;
        }

        input[type="text"]
        {
            width: 50%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .filtro{
            margin-left: 60%
        }
    </style>

</head>

<body>

    @if(session('success'))
    <span style="color: #082;">


        {{session('success')}}
    </span>
    @endif

    <div class="tabela">


        <div class="filtro">
            <form action="{{route('inscrito.index')}}">
                <input type="text" id="nm_nome" name="nm_nome" placeholder="Busca" value="{{$nm_nome}}"/>

                <select id="categoria" name="categoria">
                    <option value="curso1">Categorias</option>
                </select>

                <input type="submit" id="pesquisa" name="pesquisa"/>
            </form>
        </div>



        <table>

            <tr>
                <th>Inscrito</th>
                <th>Data de inscrição</th>
                <th>Categoria</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Status</th>
                <th>Total</th>
                <th>Ações</th>
            </tr>

            @forelse ($inscritos as $inscrito)
            <tr>
                <td>{{$inscrito->nm_nome}}</td>
                <td>{{$inscrito->created_at}}</td>
                <td>{{$inscrito->nm_tipo_de_usuario}}</td>
                <td>{{$inscrito->cd_cpf}}</td>
                <td>{{$inscrito->nm_email}}</td>
                <td>Não pago</td>
                <td>0</td>
                <td style="width: 300px">
                    <ul class="acoes">
                        <button class="visualizar">
                            <a href="{{route('inscrito.show',['inscrito' => $inscrito->id])}}">Visualizar</a>
                        </button>
                        <button class="editar">
                            <a href="{{route('inscrito.edit',['inscrito' => $inscrito->id])}}">Editar</a>
                        </button>

                        <form action="{{route('inscrito.destroy',['inscrito' => $inscrito->id])}}" method="post">
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


        <ul class="acoes">
            <button type="reset" class="button-back">
                <a href="{{route('inscrito.index')}}">Voltar</a>
            </button>
            <button type="button" class="button-arq">
                
                <a href="{{route('inscritos.gerar-pdf')}}">Exportar PDF</a>
            </button>
            <button type="button" class="button-arq">
            <a href="{{route('inscritos.gerar-csv')}}">Exportar XLS</a>
            </button>
        </ul>
    </div>
</body>

</html>