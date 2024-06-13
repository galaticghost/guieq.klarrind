<?php

require_once("conexao.php");

class Cliente extends conexao {
    private $id;
    private $nome;
    private $dataDeNascimento;
    private $salario;
    private $codCidade;

    public function __construct(){
        parent::__construct();    
    }

    public function getId(){ // Getters e setters
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
    public function getDataDeNascimento(){
		return $this->dataDeNascimento;
	}
	public function setDataDeNascimento($dataDeNascimento){
		$this->id = $dataDeNascimento;
	}
	public function getSalario(){
		return $this->salario;
	}
	public function setSalario($salario){
		$this->nome = $salario;
	}
    public function getCodCidade(){
        return $this->codCidade;
    }

    public function inserir($nome, $dataDeNascimento, $salario, $codCidade){
        $sql = "INSERT INTO cliente(nome, dataDeNascimento, salario ,codCidade) VALUES 
        (?,?,?,?);";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssdi',$nome,$dataDeNascimento,$salario,$codCidade);
        $stmt->execute();
        $stmt->close();
        if($stmt == true){
            header("Location: ../view/clientes.php?nome=$nome");
        }
        else{
            die("Falha na consulta.");
        }
    }
    
    public function consulta(){
        $sql = "SELECT cliente.id, cliente.nome, cliente.salario, cliente.dataDeNascimento, cliente.codCidade, cidade.nome AS nomeCidade FROM cliente LEFT JOIN cidade ON cidade.id = cliente.codCidade ORDER BY cliente.nome";
        $result = $this->conn->query($sql)
        or die ("Falha na consulta");
        $this->conn->close();
        if($result == true){
            return $result;
        }
    }
    
    public function editar($id,$nome,$dataDeNascimento,$salario,$codCidade){
        $sql = "UPDATE cliente SET nome = ?, dataDeNascimento = ?, salario = ?, codCidade = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssdii',$nome,$dataDeNascimento,$salario,$codCidade,$id);
        $stmt->execute();
        $stmt->close();
        if($stmt == true){
            header("Location: ../view/clientes.php?editado");
        }
        else{
            die("Falha na edição.");
        }
    }
    
    public function excluir($id){
        $sql = "DELETE FROM cliente WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();
        if($stmt == true){
            header("Location: ../view/clientes.php?excluido");
        }
        else{
            die("Falha na exclusão.");
        }
    }
    //Apenas Nome
    public function consultaNome($id){
        $sql = "SELECT nome FROM cliente WHERE id = $id;";
        $result = $this->conn->query($sql);
        $this->conn->close();
        if($result == true){
            return $result;
        }
    }
    //Linha completa
    public function consultaNomeCompleta($id){
        $sql = "SELECT id,nome,dataDeNascimento,salario,codCidade FROM cliente WHERE id = $id;";
        $result = $this->conn->query($sql);
        $this->conn->close();
        if($result == true){
            return $result;
        }
    }
}