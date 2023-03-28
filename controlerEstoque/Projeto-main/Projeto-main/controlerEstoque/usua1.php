<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redireciona para a página de login
    header('Location: login.php');
    exit;
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Controler Estoque</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
	integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<style type="text/css">
		
		body{
			text-align: center;
			background: black;
			color: white;
		}


	</style>

</head>
<body>
	<a href="sair.php">Sair</a>
	<br><br>
	<h1>Controle de Estoque</h1><br><br>

	<a href="cadastrar.php" type="button" class="btn btn-primary">Cadastrar Item</a><br><br>
	<a href="listagem.php" type="button" class="btn btn-primary">Pesquisar de Item</a><br><br>
	<a href="excluirItem.php" type="button" class="btn btn-danger">Excluit Item</a><br><br>
	<a href="excluirUsuario.php" type="button" class="btn btn-danger">Excluir Usuario</a><br><br>
	<a href="excluirrm.php" type="button" class="btn btn-success">Excluir requisição</a><br><br>
	<a href="" type="button" class="btn btn-success">Registrar saída do estoque</a><br><br>
	<a href="cadastroUsuario.php" type="button" class="btn btn-primary">Cadastrar Usuário</a><br><br>

</body>
</html>