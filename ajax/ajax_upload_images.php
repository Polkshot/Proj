<?php
$HOST = "localhost";
$USUARIO = "root";
$SENHA = "";
$BANCO = "testepainel";
$conecta = mysql_connect($HOST, $USUARIO, $SENHA);
mysql_select_db($BANCO,$conecta);
if(isset($_FILES['fotos'])){
	$values = "";
	$files = $_FILES['fotos']['tmp_name'];
	$apartir = $_POST['pos'];
	for($f = 0; $f < count($files);$f++){
		$data = date("d-m-Y");
		$hora = date("h_i_s");
		$file = $files[$f];
		$pos = $f+$apartir;
		$filename = $_FILES['fotos']['name'][$f];
		$fileext = explode(".",$filename);
		$ext = $fileext[1];
		$nome = $data."[".$hora."]_".$f.".".$ext;
		
		$upload = move_uploaded_file($file,$_SERVER['DOCUMENT_ROOT']."/Painel/imgsteste/".$nome);
		if(!$upload){
			break;
		}else{
			$query = "INSERT INTO galeria(file,pos,legenda) VALUES ('".$nome."',".$pos.",'')";
			$exec = mysql_query($query);
			$id = mysql_insert_id();
			$values .= $id."-".$pos."-";
		}
	}
	
	
	$values = substr($values,0,-1);
	mysql_close($conecta);
	$data = json_encode(array('msg' => $values),JSON_FORCE_OBJECT);
	echo $data;
	
}
?>