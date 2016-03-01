<?php 

	$destino = "albert1047@hotmail.com";
	$name = $_POST['name'];
	$apellido = $_POST['apellido'];
	$email = $_POST['correo'];
	$tel = $_POST['tel'];
	$comentario = $_POST['coment'];

	// $nombre = $name." ".$apellido;
	$contenido = "Nombre: ".$name ." ". $apellido."\nCorreo: ".$email."\nTeléfono: ".$tel."\nComentario: ".$comentario;

	mail($destino, "Contacto",$nombre, $contenido);
	echo " <script type='text/javascript'>
	               alert('Enviado Exitosamente');
	               window.location='index.html';
               </script> ";
	// // $mensaje = "";

	// $cabecera = "From:" .$name.' '.$apellido;


	// if(mail("albert1047@hotmail.com","Mensaje de Contacto", "Correo: ". $email, "Telefono: " .$tel, "Comentario" .$comentario)){
	// 	echo " <script type='text/javascript'>
	//                alert('Enviado Exitosamente');
	//                window.location='index.html';
 //               </script> ";

	// }

	// else{
	// 	echo " <script type='text/javascript'>
	//                alert('Error al Enviar');
	//                window.location='index.html';
 //               </script> ";
	// }


	
 ?>