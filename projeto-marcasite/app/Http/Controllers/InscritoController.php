<?php

namespace App\Http\Controllers;

use App\Models\Inscrito;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class InscritoController extends Controller
{
    //Listar os incritos
    public function index(Request $request){

        $inscritos = Inscrito::when($request->has('nm_nome'),function($whenQuery) use ($request){
            $whenQuery->where('nm_nome','like','%'. $request->nm_nome . '%');
        })->orderByDesc('created_at')->paginate(5)->withQueryString();

        return view("inscritos.index", ['inscritos' => $inscritos,'nm_nome'=> $request->nm_nome]);
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
    public function destroy(Inscrito $inscrito){
        $inscrito->delete();

        return redirect()->route("inscrito.index")->with("success","Conta apagada com sucesso");
    }

    public function gerarPdf(){
        $inscrito = Inscrito::orderByDesc('created_at')->get();
        $pdf = PDF::loadView('inscritos.gerar-pdf',['inscritos'=> $inscrito])->setPaper('a4','portrait');
        return $pdf->download('listar_inscritos.pdf');
    }

    public function gerarCsv(Request $request){
        $inscritos = Inscrito::orderByDesc('created_at')->get();
        $csvNomeDoArquivo = tempnam(sys_get_temp_dir(),'csv_' . Str::ulid());
        
        $arquivoAberto = fopen($csvNomeDoArquivo,'w');
        $cabecalho = ['id','nome','criado','tipo','cpf','email','status','valor'];

        fputcsv($arquivoAberto, $cabecalho,';');

        foreach ($inscritos as $inscrito) {
            $inscritoArray = [
                'id' => $inscrito->id,
                'nome' => $inscrito->nm_nome,
                'tipo' => $inscrito->nm_tipo_de_usuario,
                'cpf' => $inscrito->cd_cpf,
                'email' => $inscrito->nm_email,
                'status' => 'aberto',
                'valor' => '0',
                
            ];
            fputcsv($arquivoAberto, $inscritoArray,';');
        }
        $rodape = ['','','','','','',''];

        fputcsv($arquivoAberto, $rodape,';');
        fclose($arquivoAberto);
        return response()->download($csvNomeDoArquivo,'relatorio' . Str::ulid() . '.csv');
    }
}
