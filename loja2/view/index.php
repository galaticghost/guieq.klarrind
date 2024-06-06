<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bola's Bazar</title>
</head>
<body>
	<?php require_once('admin.php'); ?>
	<h1 align="center">Bola's Bazar</h1>
	<center><img src ="../img/union_pay.png" /></center>


	<?php
	if (isset($_REQUEST['invalidUser'])){
		echo "<script>alert('Usuário inválido!');</script>";
	}
	?>
</body>
</html>