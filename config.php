<?php
	try{
		$pdo = new PDO("mysql:dbname=permissao;host=localhost", "root", "root");
	}catch(PDOException $e){
		echo "ERRO: ".$e->getMessage();
		exit;
	}
?>