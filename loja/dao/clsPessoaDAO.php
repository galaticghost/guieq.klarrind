<?php

class PessoaDAO{
    public static function inserir($pessoa){
        $nome = $pessoa->nome;
        $dataDeNascimento = $pessoa->dataDeNascimento;
        $salario = $pessoa->salario;
        $sql = "INSERT INTO cliente (nome, dataDeNascimento, salario) VALUES ('$nome', '$dataDeNascimento', '$salario') ;";   
        $id = Conexao::executarComId($sql); 
        return $id;
    }
    /*public static function editar($cidade){
        $id = $cidade->id;
        $nome = $cidade->nome;
        $sql = "UPDATE cidade SET nome = '$nome' WHERE id = $id ;";
        Conexao::executar($sql);
    }
    public static function excluir($idCidade){
        $sql = "DELETE FROM cidade WHERE id = $idCidade;";
        Conexao::executar($sql);
    }

    public static function getCidades(){
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
    }*/
}