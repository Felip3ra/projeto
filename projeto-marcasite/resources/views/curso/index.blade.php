<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listar cursos</h1>
    @if(session('success'))
    <span style="color: #082;">


        {{session('success')}}
    </span>
    @endif

    @forelse ($cursos as $curso)

    Curso:{{$curso->nm_nome}}<br>
        Descrição:{{$curso->ds_descricao}}<br>
        Valor:{{$curso->vl_valor}}<br>
        Data de início das inscrições:{{$curso->dt_data_de_inicio}}<br>
        Data de termino das inscrições:{{$curso->dt_data_de_termino}}<br>
        Quantida máxima de inscritos:{{$curso->qt_maximo_de_inscritos}}<br>

        <a href="{{route('curso.show',['curso' => $curso->id])}}">Visualizar</a>
        <a href="{{route('curso.edit',['curso' => $curso->id])}}">Editar</a><br>

        <form action="{{route('curso.destroy',['curso' => $curso->id])}}" method="post">
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