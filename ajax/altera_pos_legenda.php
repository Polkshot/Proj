<?php
$HOST = "localhost";
$USUARIO = "root";
$SENHA = "";
$BANCO = "testepainel";
$conecta = mysql_connect($HOST, $USUARIO, $SENHA);
mysql_select_db($BANCO,$conecta);
if(isset($_POST['pos'])){
	$posicoes = $_POST['pos'];
	$values = "";
	for($pos = 0;$pos < count($posicoes);$pos++){//$pos já é a nova posição
		$id = $posicoes[$pos];
		$query = "UPDATE galeria SET pos = ".$pos." WHERE id = ".$id." ";
		$exec = mysql_query($query);
		$values .= $id."-".$pos."-";

	}
	mysql_close($conecta);
	$values = substr($values,0,-1);
	$data = json_encode(array('msg' => $values),JSON_FORCE_OBJECT);
	echo $values;
}