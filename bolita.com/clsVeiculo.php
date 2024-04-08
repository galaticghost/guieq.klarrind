<?php
// VrumVrum.net
class Veiculo {
    public $id;
    public $marca;
    public $modelo;
    public $velocidade;

    public function __construct($marca,$modelo){
        $this->id = null;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }
    public function ligar(){
        echo "Veículo ligado";
        echo "<br>Modelo: " . $this->modelo . "<br>";
    }
    public function acelerar($velocidade){
        if ($velocidade > 0) {
            $this->velocidade += $velocidade;
        }
        return $this->velocidade; 
    }
    public function frear($velocidade) {
        if ($velocidade > 0){
            if ($velocidade <= $this->velocidade) {
                $this->velocidade -= $velocidade;
            }
            else {
                $this->velocidade = 0;
            }
            return $this->velocidade;
        }
    }
}