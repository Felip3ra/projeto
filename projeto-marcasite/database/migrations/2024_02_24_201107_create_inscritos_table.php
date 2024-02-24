<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscritos', function (Blueprint $table) {
            $table->id();
            $table->string('nm_nome');
            $table->dateTime('dt_data_de_inscricao');
            $table->string('nm_email');
            $table->string('cd_cpf');
            $table->string('nm_empresa');
            $table->string('tl_telefone');
            $table->string('tl_celular');
            $table->string('nm_tipo_de_usuario');
            $table->string('nm_curso');
            $table->string('pw_senha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscritos');
    }
};
