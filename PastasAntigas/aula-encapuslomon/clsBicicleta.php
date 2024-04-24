<?php

class Bicicleta {
    
    private $id;
    private $marca;
    private $cor;
    
    public function __construct($id,$marca,$cor){
        $this->id = $id;
        $this->marca = $marca;
        $this->cor = $cor;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }    
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function andar(){
        echo "<br>Bicicleta andando";
    }
    public function frear(){
        echo "<br>Bicicleta parada";
    }
}
