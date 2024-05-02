<?php
require_once("conexao.php");

Class Cidade extends conexao{
	private $id;
	private $nome;
	private $tabela = "cidade";

	public function __construct(){
		parent::__construct();
	}

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
//consulta no banco
	public function consulta(){
		$sql = "SELECT id,nome FROM $this->tabela";
		$result = $this->conn->query($sql)
		or die("Falha na consulta.");
		if($result == true){
			return $result;
		}
		$this->conn->close();
	}
	
	public function inserir($nome){
		$sql = "INSERT INTO $this->tabela(nome) VALUES (?);";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('s', $nome);
		$stmt->execute();
		$stmt->close();
		if($stmt == true){
			header("Location: ../view/cidades.php?nome=$nome");
		}
		else{
			die("Falha na consulta.");
		}
	}
	public function editar($nome, $id){
		$sql = "UPDATE $this->tabela SET nome = ? WHERE id = ?;";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('si',$nome,$id);
		$stmt->execute();
		$stmt->close();
		if($stmt == true){
			header("Location: ../view/cidades.php?editar");
		}
		else{
			die("Falha na edição.");
		}
	}

	public function excluir($id){
		$sql = "DELETE FROM $this->tabela WHERE id = ?";
		$stmt = $this->conn->prepare($sql);
		$stmt->bind_param('i',$id);
		$stmt->execute();
		if($stmt == true){
			header("Location: ../view/cidades.php?excluir");
		}
		else{
			die("Falha na exclusão.");
		}
	}
}
/*public function inserir($nome){
	$sql = "INSERT INTO $this->tabela(nome) VALUES(?)";
	$stmt = $this->conn->prepare($sql);
	$stmt->bind_param('s',$nome);
	$stmt->execute();
	
	if($stmt == true){
		header( "Location: ../cidades.php?nome=$nome");
	}else{
		die("Falha no cadastro!");
	}
	$stmt->close();
	$this->conn->close();
}*/