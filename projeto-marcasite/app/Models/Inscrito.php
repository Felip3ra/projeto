<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscrito extends Model
{
    use HasFactory;

    //Indicar o nome da tabela
    protected $table = "inscritos";

    //indicar quais colunas podem ser cadastradas
    protected $fillable = [
        'nm_nome',
        'nm_email',
        'cd_cpf',
        'nm_endereco',
        'nm_empresa',
        'tl_telefone',
        'tl_celular',
        'nm_tipo_de_usuario',
        'nm_curso',
        'pw_senha'

    ];
}
