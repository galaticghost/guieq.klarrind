<?php

class ClienteDAO{
    public static function inserir($cliente){
        $nome = $cliente->nome;
        $dataDeNascimento = $cliente->dataDeNascimento;
        $salario = $cliente->salario;
        $sql = "INSERT INTO cliente (nome, dataDeNascimento, salario) VALUES ('$nome', '$dataDeNascimento', '$salario') ;";   
        $id = Conexao::executarComId($sql); 
        return $id;
    }
    public static function editar($cliente){
        $id = $cliente->id;
        $nome = $cliente->nome;
        $dataDeNascimento = $cliente->dataDeNascimento;
        $salario = $cliente->salario;
        $sql = "UPDATE cliente SET nome = '$nome', dataDeNascimento = '$dataDeNascimento', 
        salario = '$salario' WHERE id = $id ;";
        Conexao::executar($sql);
    }
    public static function excluir($idCliente){
        $sql = "DELETE FROM cliente WHERE id = $idCliente;";
        Conexao::executar($sql);
    }

    public static function getClientes(){
        $sql = "SELECT id, nome FROM cidade ORDER BY nome;";
        $result = Conexao::consultar($sql);
        $lista = new ArrayObject();
        if ($result != null){
            while (list($_id, $_nome) = mysqli_fetch_row($result)){
                $cid = new Cidade($_id, $_nome);
                $lista->append($cid);
            }
        }
        return $lista;
    }
}