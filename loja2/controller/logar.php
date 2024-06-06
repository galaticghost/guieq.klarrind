<?php
include("../model/usuarioModel.php");

$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];
$senha = md5($senha);

$user = new Usuario();
$user->logar($email,$senha);

if ($user->logar($email,$senha) == null){
    header("Location: ../view/index.php?invalidUser");
}
else{
    session_start();
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $user->getNome();
    $_SESSION['email'] = $user->getEmail();
    $_SESSION['admin'] = $user->getAdmin();
    header("Location: ../index.php");
}