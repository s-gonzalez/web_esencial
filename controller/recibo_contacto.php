<?php
$nombre = $_POST['nombre']." ".$_POST['apellido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = "pmagni@grupoeme.cl";
$titulo = 'Contacto Web';
$msjCorreo ='Has recibido un mensaje desde la web de Esencial.

'.$nombre. ' ha escrito lo siguiente:

'.$mensaje;
			
$header ='MINE-version: 1.0\r\n';
$header ='Content-type: text/html; charset=UTF-8\r\n';				
$header = 'From: ' . $email;
	if (mail($para, $titulo, $msjCorreo, $header)) {
		echo "<script language='javascript'>
		alert('Mensaje enviado, muchas gracias.');
		window.location.href = 'http://www.esencialchile.com';
		</script>";
	
	} else {
			echo 'Falló el envio';
		}

?>
