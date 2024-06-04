<?php
include("../model/usuarioModel.php");

$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];
$senha = md5($senha);

$user = new Usuario();
$user->logar($email,$senha);
//ve essa merda aqui 
if ($user->logar($email,$senha) == null){
    header("Location: ../view/index.php?invalidUser");
}
else{
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $user->nome;
    $_SESSION['email'] = $user->email;
    $_SESSION['admin'] = $user->admin;
    header("Location: ../index.php");
}