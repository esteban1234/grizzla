<?php 
	//Incluimos la clase de PHPMailer
	require_once('phpmailer/class.phpmailer.php');
	$correo = new PHPMailer(); //Creamos una instancia en lugar usar mail()

	// Datos que llegan del Formulario
	$destino = "albert1047@hotmail.com";
	$name = $_POST['name'];
	$apellido = $_POST['apellido'];
	$email = $_POST['correo'];
	$tel = $_POST['tel'];
	$comentario = $_POST['coment']; 
 
	//Usamos el SetFrom para decirle al script quien envia el correo
	$correo->SetFrom($destino, "Contacto BUFETE");
 
	//Usamos el AddReplyTo para decirle al script a quien tiene que responder el correo
	$correo->AddReplyTo($email,"Contacto BUFETE");
 
	//Usamos el AddAddress para agregar un destinatario
	$correo->AddAddress($email, "Robot");
 
	//Ponemos el asunto del mensaje
	$correo->Subject = "Mi Primero correo";
 
	/*
	 * Si deseamos enviar un correo con formato HTML utilizaremos MsgHTML:
	 * $correo->MsgHTML("<strong>Mi Mensaje en HTML</strong>");
	 * Si deseamos enviarlo en texto plano, haremos lo siguiente:
	 * $correo->IsHTML(false);
	 * $correo->Body = "Mi mensaje en Texto Plano";
	 */
	$correo->MsgHTML("Mi Mensaje en <strong>Santiago Ballina Mendoza</strong>");
 
	//Si deseamos agregar un archivo adjunto utilizamos AddAttachment
	//$correo->AddAttachment("images/phpmailer.gif");
 
	//Enviamos el correo
	if(!$correo->Send()) {
	  echo "Error al enviar: " . $correo->ErrorInfo;
	  echo " <script type='text/javascript'>
                    alert('Error al Enviar Mensaje');
                    window.location='index.html';
                    </script> ";
	} else {
	  echo " <script type='text/javascript'>
                    alert('Mensaje Enviado con Exito');
                    window.location='index.html';
                    </script> ";
	}
?>

	
 ?>