<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="assets\bootstrap\css\bootstrap.min">

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/navbar-animation-fix.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

</body>

</html>




<?php

require 'config.php';
?>

<div class="container">
	<h3>CONTROLE DE USUARIOS</h3>
	<table class="table" border="0" width="50%">
		<div class="thead-light">
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Idade</th>
				<th>Ações</th>
			</tr>
		</div>

		<?php
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql);
		if ($sql->rowCount() > 0) {
			foreach ($sql->fetchAll() as $usuario) {
				echo '<tr>';
				echo '<td>' . $usuario['nome'] . '</td>';
				echo '<td>' . $usuario['email'] . '</td>';
				echo '<td>' . $usuario['idade'] . '</td>';
				echo '<td><a href="editar.php?id=' . $usuario['id'] . '">Editar</a> - <a href="excluir.php?id=' . $usuario['id'] . '">Excluir</a></td>';
				echo '</tr>';
			}
		}



		?>


	</table>
	<a href="adicionar.php"> <b>ADICIONAR USUARIO</b></a>
</div>