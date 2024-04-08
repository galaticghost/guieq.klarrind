<?php
    class Carro {
        public $ano;
        public $marca;
        public $modelo;
        public $cor;
        public $tipo;
        
        public function __construct($ano, $marca, $modelo, $cor, $tipo){
            $this->ano = $ano;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
            $this->tipo = $tipo;
        }
        public function status(){
            echo "<h2>Dados do Veículo</h2>";
            echo "Ano: " . $this->ano;
            echo "<br>Marca: " . $this->marca;
            echo "<br>Modelo: " . $this->modelo;
            echo "<br>Cor: " . $this->cor;
            echo "<br>Câmbio: ". $this->tipo;
            echo "<hr>";
        }
        public function vender($valor){
            echo "<h3>" . $this->marca . " " . $this->modelo . " vendido por R$:" . $valor . "</h3><br>";
        }
        public function contar($carros){
            return count($carros);
        }
    }
