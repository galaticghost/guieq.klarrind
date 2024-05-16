<?php
namespace Blgo;

class Quadrado{
    public $id;
    public $name;
    public $lado;

    public function __construct($id,$name,$lado){
        $this->id = $id;
        $this->name = $name;
        $this->lado = $lado;
    }
    public function calcularLado(){
        return $this->lado ** 2;
    }
}

class Retangulo extends Quadrado{
    public $lado2;
    public function __construct($id,$name,$lado,$lado2){
        parent::__construct($id,$name,$lado);
        $this->lado2 = $lado2;
    }
    public function calcularLado(){
       return $this->lado * $this->lado2; 
    }
}