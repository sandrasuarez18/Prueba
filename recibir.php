<?php
// recibimos las variables por post
$destino="sandramayela18@gmail.com"
$nombre=$_POST['Nombre'];
$para=$_POST['txtPara'];
$apellido=$_POST['txtApellido'];
$edad=$_POST['txtEdad'];
$mensaje=$_POST['txtMensaje'];



 
  
if(mail($para, $asunto, $mensaje,)) {
    echo "Su nombre es: ".$nombre." ".$apellido.", Correo enviado a ".$txtPara;
} else {
    echo 'Error al enviar mensaje';
}


?>
