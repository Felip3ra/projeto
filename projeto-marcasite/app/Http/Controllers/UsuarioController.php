<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //Listar os incritos
    public function index(){

        $usuarios = Usuario::orderByDesc('created_at')->get();
        return view("usuario.index", ['usuarios' => $usuarios]);
    }
    //carregar o formulario cadastrar usuario
    public function create(){
        return view("usuario.create");
    }

    public function show(Usuario $usuario){
        return view("usuario.show",['usuario' => $usuario]);
    }
    //cadastrar no banco de dados o novo usuario
    public function store(Request $request){
        //cadastrar no banco de dados os valores dos campos
        $usuario = Usuario::create($request->all());
        
        return redirect()->route("usuario.show",['usuario' => $usuario->id])->with("success","Conta cadastrada com sucesso");
    }
    //carregar o formulario editar conta
    public function edit(Usuario $usuario){
        
        return view("usuario.edit",['usuario' => $usuario]);
    }
    //editar no banco de dados a conta
    public function update(Request $request,Usuario $usuario){
        $usuario->update([
            'nm_nome' => $request->nm_nome,
            'nm_email' => $request->nm_email,
            'nm_tipo_de_usuario' => $request->nm_tipo_de_usuario,
            'pw_senha' => $request->pw_senha,
        ]);

        return redirect()->route("usuario.show",['usuario' => $usuario->id])->with("success","Conta editada com sucesso");
    }
    //excluir a conta do banco de dados
    public function destroy(Usuario $usuario){
        $usuario->delete();

        return redirect()->route("usuario.index")->with("success","Conta apagada com sucesso");
    }
}
