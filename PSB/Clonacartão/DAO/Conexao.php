<?php

function conectar(){
	$database = "clonacartão";
	$local = "localhost";
	$user = "root";
	$password = "";
	$con = mysqli_connect($local,$user,$password,$database);
	if ($con) {
		return $con;
	}
	else {
		return null;
	}
}

function desconectar($con){
	if ($con) mysqli_close($con);
}

function consultar($sql){
	$con = conectar();
	if ($con){
		$result = mysqli_query($con,$sql);
		desconectar($sql);
		return $result;
	}
	else{
		return null;
	}
}

function executar($sql){
	$con = conectar();
	if($con){
		mysqli_query($con,$sql);
		desconectar($sql);
	}
}

function exectuarComId($sql){
	$con = conectar();
	$id = 0;
	if($con){
		mysqli_query($con,$sql);
		$id = mysqli_insert_id($con);
		desconectar($sql);
	}
	return $id;
}

function inserir($cartao){
	$numFrente = $cartao->numFrente;
	$numAtras = $cartao->numAtras;
	$dataDeVencimento = $cartao->dataDeVencimento;
	$sql = "INSERT INTO cartão (NumFrente, NumAtras, dataDeVencimento) VALUES ('$numFrente', 
	'$numAtras', '$dataDeVencimento') ;";
	return executar($sql);
}
	
