<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Transportadora;
class TransportadoraController extends Controller
{
    private $transportadora = null;
    public function __construct(Transportadora $transportadora) {
        $this->transportadora = $transportadora;
    }
    public function getTransportadoras() {
        return response()->json($this->transportadora->getTransportadoras(),200)
        ->header("Content-Type","application/json");
    }
    public function addTransportadora(Request $request) {
        $adicionou = $this->transportadora->addTransportadora($request->all());
        if (!$adicionou) {
            return response()->json(['resposta' => 'Já existe'],409)
            ->header("Content-Type","application/json");
        } else {
            return response()->json($adicionou,201)
            ->header("Content-Type","application/json");
        }
    }
    public function getTransportadora($id) {
        $transportadora = $this->transportadora->getTransportadora($id);
        if (!$transportadora) {
            return response()->json(['resposta' => 'Não encontrado'],404)
            ->header("Content-Type","application/json");
        }
        return response()->json($transportadora,200)
        ->header("Content-Type","application/json");
    }
    public function atualizaTransportadora(Request $req, $id) {
        $transportadora = $this->transportadora->alteraTransportadora($req,$id);
        if (!$transportadora) {
            return response()->json(['resposta' => 'Não encontrado'],404)
            ->header("Content-Type","application/json");
        }
        return response()->json($transportadora,202)
        ->header("Content-Type","application/json");
    }
    public function deletaTransportadora($id) {
        $transportadora = $this->transportadora->deletaTransportadora($id);
        if (!$transportadora) {
            return response()->json(['resposta' => 'Não encontrado'],404)
            ->header("Content-Type","application/json");
        } else {
            return response()->json(['resposta' => 'Deletado'],202)
            ->header("Content-Type","application/json");
        }
        
    }
}