<?php
	header('Content-Type: application/json');
	include_once "../Usuario/controleUsuario.class.php";
	$data = json_decode(file_get_contents("php://input"));
	$controle = new controleUsuario();
	$usuarios = $controle->listar();
	print_r(json_encode($usuarios, JSON_FORCE_OBJECT));	
	
?>