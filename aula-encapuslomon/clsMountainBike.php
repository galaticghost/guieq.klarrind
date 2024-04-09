<?php
require_once("clsBicicleta.php");

class MountainBike extends Bicicleta {
    public $marcha;
    
    public function __construct(){
        parent:: __construct();
    }
    public function mudarMarcha($marcha){
        echo "Bicicleta na marcha $marcha"; 
    }
}
