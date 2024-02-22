<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscritoController extends Controller
{
    //Listar os incritos
    public function index(){
        return view("inscritos.index");
    }
    //carregar o formulario cadastrar usuario
    public function create(){
        return view("inscritos.create");
    }
    //cadastrar no banco de dados o novo usuario
    public function store(){
        dd("Cadastra");
    }
    //carregar o formulario editar conta
    public function edit(){
        return view("inscritos.edit");
    }
    //editar no banco de dados a conta
    public function update(){
        dd("Editar");
    }
    //excluir a conta do banco de dados
    public function destroy(){
        dd("Apagar");
    }
}
