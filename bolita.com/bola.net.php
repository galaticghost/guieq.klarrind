<?php

class Xinamen {
	public $nome;
	public $bola;
	public $mensagem;

	public function __construct($nome,$bola,$mensagem){
		$this->nome = $nome;
		$this->bola = $bola;
		$this->mensagem = $mensagem;
	}
	public function bolanagens(){
		if (base64_decode($this->mensagem) == "xinamen") {
			echo "fun";
		}
	}
}

if (isset($base64)) {
	$base64 = $_GET["base64"];
	$x1 = new Xinamen ("Bola","sim",$base64);
	echo "Nome: " . $x1->nome . "<br>";
	echo base64_decode($x1->mensagem);
}
else {
	echo "A mensagem não foi digitada<br>?base64=";
}
