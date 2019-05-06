<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProdutoController extends BaseController {    
    /**
     * @return view para cadastro de produtos
     */
    public function formulario()
    {
        return view("produto.formulario");
    }

    /**
     * @return array retorna listagem de produtos
     */
    public function listagem()
    {
        $produtos = DB::table("produtos")->get();
        return view("produto.listagem")->with("produtos", $produtos);
    }

    /**
     * Grava a partir de dados do form
     * @param Request $request
     * @return string
     */
    public function gravar(Request $request) {
        $nome = $request->input("nome");
        DB::table('produtos')
        ->insert(
            ['NomeProduto'=> $nome]
        );
        return redirect('/produtos');
    }

    /**
     * Remove um produto
     * @param Request $request
     * @param $id
     */
    public function deletar(Request $request, $id) {
        DB::table('produtos')->where('IDProduto', '=', $id)->delete();
        return redirect('/produtos');
    }

    /**
     * @return dados para o form de cadastro de produtos
     */
    public function formularioAlterar(Request $request, $id) {
        $produto = DB::table('produtos')
                        ->where('IDProduto', '=', $id)
                        ->get();
                        //dd($produto[0]);
        return view("produto.alterar")->with("produto", $produto[0]);
    }

    /**
     * Grava os dados do produto
     */
    public function alterar(Request $request, $id) {
        //dd($request->all());
        $nome = $request->input("nome");
        DB::table('produtos')
            ->where('IDProduto', '=', $id)
            ->update(['NomeProduto' => $nome]);
        
        return redirect('/produtos');
    }
}
?>