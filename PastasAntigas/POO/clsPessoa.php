<?php
    class Pessoa{
        public $id;
        public $name;
        public $altura;
        private $cidade;
//Cidade sem id
        public function __construct($id, $name, $altura = 1.0, $cidade = new cidade("Itati")){
            $this->id = $id;
            $this->name = $name;
            $this->altura = $altura;
            $this->cidade = $cidade;
        }
        public function getCidade(){
            return $this->cidade;
        }

    }