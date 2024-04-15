<?php

class Cidade {
    public $id; //int
    public $nome; //str

    public function __construct($id = null,$nome = null){
        $this->id = $id;
        $this->nome = $nome;
    }
}