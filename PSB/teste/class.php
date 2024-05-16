<?php

class Carlos {
    use Bonoro;
    public $id;
    public $name;
    
    public function __construct($id,$name){
        $this->id = $id;
        $this->name = $name;
    }
    public function SerXines(){
        echo "Sou " . $this->name . " e ser xines é ser " . $this->id;
    }
}

abstract class Bola {
    protected $id;
    protected $type;
    public function __construct($id,$type){
        $this->id = $id;
        $this->type = $type;
    }
    abstract protected function status();
}

class Xinaman extends Bola{
    public $name;
    public function __construct($id,$type,$name){
        parent::__construct($id,$type);
        $this->name = $name;
    }
    
    public function status(){
        echo $this->id . " " . $this->type . " " . $this->name;
    }
    public function SerXines(){
        echo "Sou $this->name e ser xines é ser bola";
    }
}

class Bolaman extends Bola{
    use Bonoro;
    public $minombre;
    public function __construct($id,$type,$minombre){
        parent::__construct($id,$type);
        $this->minombre = $minombre;
    }
    public function status(){
        echo "Id: ". $this->id . "<br>Tipo: " . $this->type . "<br>Nombre: " . $this->minombre;
    }
    public function SerXines(){
        echo $this->minombre . " e ser xines é ser um bola guy";
    }
}

interface Boladores{
    public function SerXines();
}