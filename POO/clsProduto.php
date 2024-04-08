<?php

    class Produto {
        public $id;
        public $name;
        public $preco;
        public $quantidade;
        public $categoria;

        public function __construct($id, $name, $preco, $quantidade, $categoria){
            $this->id = $id;
            $this->name = $name;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
            $this->categoria = $categoria;
        }
    }