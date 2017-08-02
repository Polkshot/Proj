<?php
require_once("../BD/MySQL.class.php");
require_once("../Usuario/controleUsuario.class.php");
$ids = $_POST['ids'];
$controle = new controleUsuario();
foreach($ids as $Id){
	$controle->excluirUsuario($Id);
}
?>