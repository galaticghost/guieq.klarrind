<?php

$nome = $_POST['txtNome'];

require_once("../cidades.php");
require_once("../model/cidade.php");


if(strlen( $nome ) == 0){
    header("Location: ../cidades.php?nomeVazio");
}
else{
    $novaCid = new Cidade();
    $novaCid->inserir($nome);
    header("Location: ../cidades.php?nome=$nome");
}

