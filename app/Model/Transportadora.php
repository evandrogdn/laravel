<?php
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
class Transportadora extends Model
{
    protected $table = "transportadoras";
    protected $fillable = array("IDTransportadora","NomeConpanhia","Telefone");
    
    public $timestamps = false;
    
    
    protected $primaryKey = 'IDTransportadora';
    public function getTransportadoras() {
        return self::all();
    }
    
    public function getTransportadora($id) {
        $transportadora = Transportadora::find($id);
        if (is_null($transportadora)) {
            return false;
        }
        return $transportadora;
    }
    public function addTransportadora($request) {
        $transportadora = new Transportadora($request);
        
        try {
            $transportadora->save();
            return $transportadora;
        } catch (\Exception $e) {
            return false;
        }
        
    } 
    public function alteraTransportadora($req,$id) {
        
        $dados = $req->all();
        
        $transportadora = Transportadora::find($id);
        if (is_null($transportadora)) {
            return false;
        }
        $transportadora->fill($dados);
        $transportadora->save();
        return $transportadora;
    }
    public function deletaTransportadora($id) {
        $transportadora = Transportadora::find($id);
        if (is_null($transportadora)) {
            return false;
        }
        return $transportadora->delete();
        
    }
}