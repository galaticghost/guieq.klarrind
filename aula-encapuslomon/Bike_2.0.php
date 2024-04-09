<?php
//Bike 2.0, não vou criar arquivos separados
class Bicicleta{
	public $id;
	public $marca;
	public $modelo;
	public $cor;
	public $velocidade;
	public $estado;

	public function __construct($id,$marca,$modelo,$cor){
		$this->id = $id;
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->estado = "parado";
	}

	public function andar($velocidade){
		if ($velocidade >= 0 ){
			$this->velocidade += $velocidade;
		}
		else{
			$this->velocidade += 0;
		}
		echo "Agora a bicicleta anda a $velocidade (Kilometros por hora?Metros por segundo?)<br>";
	}

	public function frear($velocidade){
		if($velocidade >= 0){
			$this->velocidade =- $velocidade;
		}
		else{
			$this->velocidade =- $velocidade;
		}
	}
	//A magia (não exatamente) acontece aqui
	public function status($bicicleta){
		echo "Id: " . $bicicleta->id;
		echo "<br>Marca: " . $bicicleta->marca;
		echo "<br>Modelo: " . $bicicleta->modelo;
		echo "<br>Cor: " . $bicicleta->cor . "<br>";
	}

}
//Bicicletas
$bicicleta = new Bicicleta ("01","Caloi","SuperFoda","verde");

//Filmes não audio e nem moventos
echo "<h2>Bicicletas</h2>";
$bicicleta->status($bicicleta);
$bicicleta->andar(50);
