<?php

$nome = $_POST["txtNome"];
$dataDeNascimento = $_POST["txtData"];
$salario = $_POST["txtSalario"];
// $cidade = no eziste
if (strlen($nome) == 0){
    header("Location: ../pessoas.php?nomeVazio");
}
else{
    include_once("../dao/clsConexao.php");
    include_once("../model/clsCidade.php");
    include_once("../model/clsCliente.php");
    include_once("../dao/clsPessoaDAO.php");

    $novaPes = new Pessoa(null, $nome, $dataDeNascimento, $salario, "tangamandápio");
    PessoaDAO::inserir($novaPes);
    header("Location: ../pessoas.php?nome=$nome");
}
