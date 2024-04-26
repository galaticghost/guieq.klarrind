<?php
include_once ("clsVeiculo.php");

class Moto extends Veiculo{
    public $cilindradas;
    public $partidaEletrica;

    public function __construct($marcaMoto, $modeloMoto, $cilindradas, $partidaEletrica){
        parent:: __construct($marcaMoto, $modeloMoto);
        $this->cilindradas = $cilindradas;
        $this->partidaEletrica = $partidaEletrica;
    }
    public function ligar(){
        parent:: ligar();
        echo "Moto ligada";
        /*if ($this->partidaEletrica == true) {
        }*/
    }
}