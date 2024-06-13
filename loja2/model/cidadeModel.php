<?php
require_once("conexao.php");

Class Cidade extends conexao{
	private $id;
	private $nome;

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

	public function consulta(){
		$sql = "SELECT id,nome FROM cidade ORDER BY nome";
		$result = $this->conn->query($sql)
		or die("Falha na consulta.");
		if($result == true){
			return $result;
		}
		$this->conn->close();
	}
	
    public function consultaCidades(){
        $sql = "SELECT id,nome FROM cidade";
        $result = $this->conn->query($sql)
        or die ("Falha na consulta");
        if($result == true){
			return $result;
        }
    }
	
	public function inserir($nome){
		$sql = "INSERT INTO cidade(nome) VALUES (?);";
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
		$sql = "UPDATE cidade SET nome = ? WHERE id = ?;";
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
		$sql = "DELETE FROM cidade WHERE id = ?";
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
