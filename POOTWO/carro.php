<?php
    class carro {
        public $ano;
        public $marca;
        public $modelo;
        public $cor;
        
        public function __construct($ano, $marca, $modelo, $cor){
            $this->ano = $ano;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
        }
        public function status($carro){
            echo "<h2>Dados do Veículo</h2>";
            echo "<br>Ano: " . $carro->ano;
            echo "<br>Marca: " . $carro->marca;
            echo "<br>Modelo: " . $carro->modelo;
            echo "<br>Cor: " . $carro->cor;
        }
    }
