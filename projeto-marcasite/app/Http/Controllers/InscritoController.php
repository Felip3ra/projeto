<?php

namespace App\Http\Controllers;

use App\Models\Inscrito;
use Illuminate\Http\Request;

class InscritoController extends Controller
{
    //Listar os incritos
    public function index(){

        $inscritos = Inscrito::orderByDesc('created_at')->get();
        return view("inscritos.index", ['inscritos' => $inscritos]);
    }
    //carregar o formulario cadastrar usuario
    public function create(){
        return view("inscritos.create");
    }

    public function show(Inscrito $inscrito){
        return view("inscritos.show",['inscrito' => $inscrito]);
    }
    //cadastrar no banco de dados o novo usuario
    public function store(Request $request){
        //cadastrar no banco de dados os valores dos campos
        $inscrito = Inscrito::create($request->all());
        
        return redirect()->route("inscrito.show",['inscrito' => $inscrito->id])->with("success","Conta cadastrada com sucesso");
    }
    //carregar o formulario editar conta
    public function edit(Inscrito $inscrito){
        
        return view("inscritos.edit",['inscrito' => $inscrito]);
    }
    //editar no banco de dados a conta
    public function update(Request $request,Inscrito $inscrito){
        $inscrito->update([
            'nm_nome' => $request->nm_nome,
            'nm_email' => $request->nm_email,
            'cd_cpf' => $request->cd_cpf,
            'nm_endereco' => $request->nm_endereco,
            'nm_empresa' => $request->nm_empresa,
            'tl_telefone' => $request->tl_telefone,
            'tl_celular' => $request->tl_celular,
            'nm_tipo_de_usuario' => $request->nm_tipo_de_usuario,
            'nm_curso' => $request->nm_curso,
        ]);

        return redirect()->route("inscrito.show",['inscrito' => $inscrito->id])->with("success","Conta editada com sucesso");
    }
    //excluir a conta do banco de dados
    public function destroy(){
        dd("Apagar");
    }
}
