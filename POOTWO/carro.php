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
        public function status(){
            echo "<h2>Dados do Veículo</h2>";
            echo "<br>Ano: " . $this->ano;
            echo "<br>Marca: " . $this->marca;
            echo "<br>Modelo: " . $this->modelo;
            echo "<br>Cor: " . $this->cor;
            echo "<hr>";
        }
        public function vender($valor){
            echo "<h3>" . $this->marca . " " . $this->modelo . " vendido por R$:" . $valor . "</h3><br>";
        }
    }
