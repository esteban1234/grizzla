<?php 
	$name = $_POST['name'];
	$apellido = $_POST['apellido'];
	$email = $_POST['correo'];
	$tel = $_POST['tel'];
	$comentario = $_POST['coment'];

	// $mensaje = "";

	$cabecera = "From:" . $name .' '.$apellido;


	if(mail("albert1047@hotmail.com","Mensaje de Contacto", $email, $tel, $comentario)){
		echo " <script type='text/javascript'>
	               alert('Enviado Exitosamente');
	               window.location='index.html';
               </script> ";

	}

	else{
		echo " <script type='text/javascript'>
	               alert('Error al Enviar');
	               window.location='index.html';
               </script> ";
	}
 ?>