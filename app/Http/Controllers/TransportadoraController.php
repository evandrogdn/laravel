<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class TransportadoraController extends Controller
{
    private $transportadora = null;
    public function formulario()
    {
        return view("transportadora.formulario");
    }

    /**
     * @return array retorna listagem de produtos
     */
    public function listagem()
    {
        $transportadoras = DB::table("transportadoras")->get();
        return view("transportadora.listagem")->with("transportadora", $transportadoras);
    }

    /**
     * Grava a partir de dados do form
     * @param Request $request
     * @return string
     */
    public function gravar(Request $request) {
        $maxId = DB::select("select max(IDTransportadora) + 1 as next from transportadoras");
        $nome = $request->input("nome");
        DB::table('transportadoras')
        ->insert(
            [
                'IDTransportadora' => $maxId[0]->next,
                'NomeConpanhia'=> $nome
            ]
        );
        return redirect('/transportadoras');
    }

    /**
     * Remove um produto
     * @param Request $request
     * @param $id
     */
    public function deletar(Request $request, $id) {
        DB::table('transportadoras')->where('IDTransportadora', '=', $id)->delete();
        return redirect('/transportadoras');
    }

    /**
     * @return dados para o form de cadastro de produtos
     */
    public function formularioAlterar(Request $request, $id) {
        $transportadora = DB::table('transportadoras')
                        ->where('IDTransportadora', '=', $id)
                        ->get();
        return view("transportadora.alterar")->with("transportadora", $transportadora[0]);
    }

    /**
     * Grava os dados do produto
     */
    public function alterar(Request $request, $id) {
        //dd($request->all());
        $nome = $request->input("nome");
        DB::table('transportadoras')
            ->where('IDTransportadora', '=', $id)
            ->update(['NomeConpanhia' => $nome]);
        
        return redirect('/transportadoras');
    }
}