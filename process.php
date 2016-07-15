<?php
$toemail = 'contact@lucasarana.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
if(mail($toemail, $subject, $message, 'From: ' . $email)) {
	echo 'Su mail fue enviado satisfactoriamente. En breve me pondr� en contacto con usted. Muchas gracias. Redireccionandolo nuevamente al sitio';
	header( "refresh:2;url=http://lucasarana.esy.es/" );
} else {
	echo 'Hubo un problema enviando su mail, por favor intentelo nuevamente.';
}

?>
