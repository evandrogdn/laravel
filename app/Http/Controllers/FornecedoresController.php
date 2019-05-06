<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class FornecedoresController extends BaseController {
    private $fornecedores = null;
    
    public function formulario()
    {
        return view("fornecedores.formulario");
    }

    public function listagem()
    {
        $fornecedoress = DB::table("fornecedores")->get();
        return view("fornecedores.listagem")->with("fornecedoress", $fornecedoress);
    }

    public function gravar(Request $request)
    {
        $maxId = DB::select("select max(IDFornecedor) + 1 as next from fornecedores");
        $nome = $request->input("nome");
        DB::table("fornecedores")->insert([
            'IDFornecedor' => $maxId[0]->next,
            'NomeCompanhia' => $nome
        ]);
        return redirect('/fornecedores');
    }

    public function deletar(Request $request, $id)
    {
        DB::table("fornecedores")->where('IDFornecedor', $id)->delete();
        return redirect("/fornecedoress");
    }

    public function formularioAlterar(Request $request, $id)
    {
        $fornecedores = DB::table("fornecedores")->where("IDFornecedor", $id)->get();
        return view("fornecedores.alterar")->with("fornecedores", $fornecedores[0]);
    }

    public function alterar(Request $request, $id)
    {
        $nome = $request->input("nome");
        DB::table("fornecedores")->where("IDFornecedor", $id)->update(["NomeCompanhia", $nome]);
        return redirect("/fornecedoress");
    }
}
?>