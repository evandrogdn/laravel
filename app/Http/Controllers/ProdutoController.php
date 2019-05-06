<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProdutoController extends BaseController {    
    /**
     * @return formulario para cadastro de produtos
     */
    public function formulario()
    {
        return view("produto.formulario");
    }

    public function listagem()
    {
        $produtos = DB::table("produtos")->get();
        return view("produto.listagem")->with("produtos", $produtos);
    }
}
?>