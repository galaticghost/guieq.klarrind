<?php
namespace Algo;

class Quadrado {
    private $id;
    private $lados;
    private $comprimento;

    public function __construct($id,$lados,$comprimento){
        $this->id = $id;
        $this->lados = $lados;
        $this-> comprimento = $comprimento;
    }
    private function verificarLado(){
        if($this->lados == 12){
            return "Cubo";
        }
        elseif($this->lados == 4){
            return "Quadrado";
        }
        else{
            return "diff";
        }
    }

    public function definirLado(){
        switch (Quadrado::verificarLado()){
            case "Cubo":
                echo "És un Cubo! Jajajajajja";
                break;
            case "Quadrado":
                echo "Quadrado";
                break;
            case "diff":
                echo "meh";
                break;
            default:
                die("Erro");
        }
    }
}