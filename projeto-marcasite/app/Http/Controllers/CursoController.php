<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Listar os incritos
    public function index(){

        $cursos = Curso::orderByDesc('created_at')->get();
        return view("curso.index",['cursos'=> $cursos]);
    }
    //carregar o formulario cadastrar usuario
    public function create(){
        return view("curso.create");
    }

    public function show(Curso $curso){
        return view("curso.show",["curso"=> $curso]);
    }
    //cadastrar no banco de dados o novo usuario
    public function store(Request $request){
        $curso = Curso::create($request->all());

        return redirect()->route("curso.show",['curso' => $curso->id])->with("success","Curso cadastrado com sucesso!");
    }
    //carregar o formulario editar conta
    public function edit(Curso $curso){
        return view("curso.edit",['curso' => $curso]);
    }
    //editar no banco de dados a conta
    public function update(Request $request,Curso $curso){
        $curso->update([

        ]);
        return redirect()->route('curso.show',['curso' => $curso->id])->with('success','curso editado com sucesso!');
    }
    //excluir a conta do banco de dados
    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('curso.show',['curso' => $curso->id])->with('success','curso apagado com sucesso!');
    }
}
