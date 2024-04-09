<?php

class Xinamen {
	public $nome;
	public $bola;
	public $mensagem;
	public $b64md;

	public function __construct($nome,$bola,$mensagem){
		$this->nome = $nome;
		$this->bola = $bola;
		$this->mensagem = $mensagem;
		$this->b64md = base64_decode($this->mensagem);
	}
	public function bolanagens(){
		echo $this->b64md;
		if ($this->b64md == "xinamen") {
			echo "<hr>fun";
		}
	}
}

if (isset($_GET["base64"])) {
	$base64 = $_GET["base64"];
	$x1 = new Xinamen ("Bola","sim",$base64);
	echo "Nome: " . $x1->nome . "<br>";
	$x1->bolanagens();

}
else {
	echo "A mensagem não foi digitada<br>?base64=";
}
