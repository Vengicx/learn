<?php
	
	include "conecta.php";

	$consulta = $pdo->prepare("select * from pessoa");
	$consulta->execute();

	while ($dados = $consulta->fetch(PDO::FETCH_OBJ)){
		$nome = $dados->nome;

		echo "<a class='dropdown-item' href='#$nome'>$nome</a>";
	}



?>