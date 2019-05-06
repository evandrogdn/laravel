<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class PessoaController extends BaseController {
    private $pessoa = null;
    
    public function formulario()
    {
        return view("pessoa.formulario");
    }

    public function listagem()
    {
        $pessoas = DB::table("clientes")->get();
        return view("pessoa.listagem")->with("pessoas", $pessoas);
    }

    public function gravar(Request $request)
    {
        $maxId = DB::select("select max(IDCliente) + 1 as next from clientes");
        $nome = $request->input("nome");
        DB::table("clientes")
            ->insert([
                'IDCliente' => $maxId[0]->next,
                'NomeCompanhia' => $nome
                ]);
        return redirect('/pessoas');
    }

    public function deletar(Request $request, $id)
    {
        DB::table("clientes")->where('IDCliente', $id)->delete();
        return redirect("/pessoas");
    }

    public function formularioAlterar(Request $request, $id)
    {
        $pessoa = DB::table("clientes")->where("IDCliente", $id)->get();
        return view("pessoa.alterar")->with("pessoa", $pessoa[0]);
    }

    public function alterar(Request $request, $id)
    {
        $nome = $request->input("nome");
        DB::table("clientes")->where("IDCliente", $id)->update(["NomeCompanhia", $nome]);
        return redirect("/pessoas");
    }
}
?>