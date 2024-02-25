<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";

    //indicar quais colunas podem ser cadastradas
    protected $fillable = [
        'nm_nome',
        'nm_email',
        'nm_tipo_de_usuario',
        'pw_senha'
    ];
}
