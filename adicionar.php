<?php

require 'config.php';


/* Isset verificar se a variavel existe 
*  empty — Determina se a variável é vazia
* Se o campo nome existe e estiver vaio será igual a false mas se ele
* tiver algum conteudo será verdadeiro
*/
if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
	// addslashes - Adicionar qualquer carcter na strin sem barra invertida
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$idade = addslashes($_POST['idade']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha', idade = '$idade' ";
	$pdo->query($sql);

	// Após o envio do formulario ele redireciona a pagina para o index
	header("Location: index.php");
	}

?>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome"> <br/><br/>
	E-mail:<br/>
	<input type="text" name="email" /> <br/> <br/>
	Idade:<br/>
	<input type="text" name="idade" /> <br/> <br/>
	Senha:<br/>
	<input type="password" name="senha" /> <br/><br/>

	<input type="submit" value="Cadastrar" />
</form>
