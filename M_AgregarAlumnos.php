<?php
include_once("modelo.php");
$myDB=new ClaseModelo(); //se crea un nuevo objeto de la ClaseModelo
$myDB->conectar("nido");//aqui se utiliza el objeto para conectar con la base de datos de mysql
//esto lo hace utilizando un metodo para conectar con la base datos
$text[0]=$myDB->GenerarCodigo("alumnos","codigoAlu");
if($_POST['ok']=="Agregar"){
	$datos=$_POST['text'];
	$datos[0]=$myDB->GenerarCodigo("alumnos","codigoAlu");
	$myDB->AgregarRegistro("alumnos",$datos);
}
?>
