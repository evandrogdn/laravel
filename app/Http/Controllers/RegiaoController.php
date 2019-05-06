<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class RegiaoController extends BaseController
{
    public function formulario()
    {
        return view("regiao.formulario");
    }

    /**
     * @return array retorna listagem de produtos
     */
    public function listagem()
    {
        $regiao = DB::table("regiao")->get();
        return view("regiao.listagem")->with("regiao", $regiao);
    }

    /**
     * Grava a partir de dados do form
     * @param Request $request
     * @return string
     */
    public function gravar(Request $request) {
        $maxId = DB::select("select max(IDTransportadora) + 1 as next from transportadoras");
        $nome = $request->input("nome");
        DB::table('regiao')
        ->insert(
            [
                'IDRegiao' => $maxId[0]->next,
                'DescricaoRegiao'=> $nome
            ]
        );
        return redirect('/regiao');
    }

    /**
     * Remove um produto
     * @param Request $request
     * @param $id
     */
    public function deletar(Request $request, $id) {
        DB::table('regiao')->where('IDRegiao', '=', $id)->delete();
        return redirect('/regiao');
    }

    /**
     * @return dados para o form de cadastro de produtos
     */
    public function formularioAlterar(Request $request, $id) {
        $produto = DB::table('regiao')
                        ->where('IDRegiao', '=', $id)
                        ->get();
        return view("regiao.alterar")->with("regiao", $produto[0]);
    }

    /**
     * Grava os dados do produto
     */
    public function alterar(Request $request, $id) {
        //dd($request->all());
        $nome = $request->input("nome");
        DB::table('regiao')
            ->where('IDRegiao', '=', $id)
            ->update(['DescricaoRegiao' => $nome]);
        
        return redirect('/regiao');
    }
}