<?php
	header('Content-Type: application/json');
	include_once "../Usuario/controleUsuario.class.php";
	$controle = new controleUsuario();
	$usuarios = $controle->listar();
	print_r(json_encode($usuarios, JSON_FORCE_OBJECT));	
	
?>