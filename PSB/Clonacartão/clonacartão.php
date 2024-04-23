<?php
require_once("/DAO/conexao.php");
require_once("/controller/salvarCartao.php");
require_once("/model/cartão.php");

//Varíaveis
$nc = $_POST["nc"];
$nac = $_POST["nac"];
$dv = $_POST["dv"];

//Clonagem

$novoCar = new Cartao(null, $nc, $nac, $dv);

inserir($novoCar);

