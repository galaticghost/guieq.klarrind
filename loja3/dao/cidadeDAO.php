<?php
require_once("cidadeDaoInterface.php");
require_once("conexaoDAO.php");

class CidadeDAO extends ConexaoDAO implements cidadeDaoInterface{
	
	public static function consultar(){
		$sql = "SELECT id,nome FROM cidade ORDER BY nome";
		$result = self::$conn->query($sql)
		or die("Falha na consulta.");
        self::$conn->close();
        if($result == true){
            return $result;
		}
	}
	
    public static function consultaCidades(){
        $sql = "SELECT id,nome FROM cidade";
        $result = self::$conn->query($sql)
        or die ("Falha na consulta");
        self::$conn->close();
        if($result == true){
            return $result;
        }
    }
	
	public static function inserir($nome){
		$sql = "INSERT INTO cidade(nome) VALUES (?);";
		$stmt = self::$conn->prepare($sql);
		$stmt->bind_param('s', $nome);
		$stmt->execute() or
        die("Falha na consulta.");
		$stmt->close();
	}

	public static function editar($nome, $id){
		$sql = "UPDATE cidade SET nome = ? WHERE id = ?;";
		$stmt = self::$conn->prepare($sql);
		$stmt->bind_param('si',$nome,$id);
		$stmt->execute() or
        die("Falha na consulta.");
		$stmt->close();
	}

	public static function excluir($id){
		$sql = "DELETE FROM cidade WHERE id = ?";
		$stmt = self::$conn->prepare($sql);
		$stmt->bind_param('i',$id);
		$stmt->execute() or
        die("Falha na consulta.");
        $stmt->close();
	}
}