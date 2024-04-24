<?php

$nome = $_POST["txtNome"];
$dataDeNascimento = $_POST["txtData"];
$salario = $_POST["txtSalario"];
// $cidade = no eziste
if (strlen($nome) == 0){
    header("Location: ../clientes.php?nomeVazio");
}
else{
    include_once("../dao/clsConexao.php");
    include_once("../model/clsCidade.php");
    include_once("../model/clsCliente.php");
    include_once("../dao/clsClienteDAO.php");

    $novoCli = new Cliente(null, $nome, $dataDeNascimento, $salario, "tangamandápio");
    ClienteDAO::inserir($novoCli);
    header("Location: ../clientes.php?nome=$nome");
}
