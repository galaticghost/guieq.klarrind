<?php

class Cidade {
    private $id;
    private $nome;

    public function getId() {return $this->id;}

	public function getNome() {return $this->nome;}

	public function setId($id): void {$this->id = $id;}

	public function setNome($nome): void {$this->nome = $nome;}

}