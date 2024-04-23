<?php

class Cartao {
	public $id;
	public $numFrente;
	public $numAtras;
	public $dataDeVencimento;

	public function __construct($id, $numFrente, $numAtras, $dataDeVencimento){
		$this->id = $id;
		$this->numFrente = $numFrente;
		$this->numAtras = $numAtras;
		$this->dataDeVencimento = $dataDeVencimento;
	}
}
