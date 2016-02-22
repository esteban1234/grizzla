<?php 
	$name = $_POST['name'];
	$apellido = $_POST['apellido'];
	$email = $_POST['correo'];
	$tel = $_POST['tel'];
	$comentario = $_POST['coment'];

	$mensaje = "Mensaje de Bienvenida ";
<<<<<<< HEAD
	$cabecera = "From:" . $name .' '.$apellido;
=======
	// $cabecera = "From: Santiago Balina R<ballina.santiago@gmail.com>";
>>>>>>> parent of 5539c2c... Revert "rediseño portafolio"

	if(mail("albert1047@hotmail.com","Mensaje de Prueba 2", $mensaje)){
		echo "Mensaje exitoso";
	}

	else{
		echo "Errror al enviar";
	}
 ?>