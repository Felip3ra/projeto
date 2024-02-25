<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = "cursos";

    //indicar quais colunas podem ser cadastradas
    protected $fillable = [
        'nm_nome',
        'ds_descricao',
        'vl_valor',
        'dt_data_de_inicio',
        'dt_data_de_termino',
        'qt_maximo_de_inscritos',
    ];
}
