<?php
include"conexion.php";
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$pasword=$_POST['pasword'];
$mensaje=$_POST['Mensaje'];

mail($correo,'hola',$mensaje);
$sql= "insert into inserta values (\"$correo\",\"$usuario\",\"$pasword\",\"$mensaje\")";
$query = $conexion->query($sql);
if($query){
		include"alerta.html";
}else{
		include"alertarechazada.html";
}
?>
