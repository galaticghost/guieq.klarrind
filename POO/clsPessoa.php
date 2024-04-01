<?php
    class pessoa{
        public $id;
        public $name;
        private $altura;
        public $cidade;
        
        public function __construct($id, $name, $altura = 1.0, $cidade = new cidade("Itati")){
            $this->id = $id;
            $this->name = $name;
            $this->altura = $altura;
            $this->cidade = $cidade;
        }

    }