<?php
if($_POST)
{
	$to_Email   	= "contacto@rexcont.cl"; //Replace with recipient email address
	$subject        = 'Tienes un e-mail de contacto desde Rexcont'; //Subject line for emails
	
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		//exit script outputting json data
		$output = json_encode(
		array(
			'type'=>'error', 
			'text' => 'Request must come from Ajax'
		));
		
		die($output);
    } 
	
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["nameInput"]) || !isset($_POST["emailInput"]) || !isset($_POST["descriptionInput"]))
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Campos vacios'));
		die($output);
	}
	//Sanitize input data using PHP filter_var().
	$user_Name        = filter_var($_POST["nameInput"], FILTER_SANITIZE_STRING);
	$user_Email       = filter_var($_POST["emailInput"], FILTER_SANITIZE_EMAIL);
	$user_Message     = filter_var($_POST["descriptionInput"], FILTER_SANITIZE_STRING);
	
	//additional php validation
	if(strlen($user_Name)<3) // If length is less than 4 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Nombre corto o vacío'));
		die($output);
	}
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Ingrese un e-mail válido'));
		die($output);
	}
	if(strlen($user_Message)<5) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Mensaje muy corto'));
		die($output);
	}
	
	//proceed with PHP email.
	$headers = 'From: '.$user_Email.'' . "\r\n" .
	'Reply-To: '.$user_Email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$sentMail = @mail($to_Email, $subject,'Nombre: '.$user_Name."\n"."\n".'Mail: '.$user_Email."\n"."\n".'Mensaje: ' .$user_Message, $headers);
	
	if(!$sentMail)
	{
		$output = json_encode(array('type'=>'error', 'text' => 'No se pudo enviar el mensaje.'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => 'Mensaje Enviado, nos pondremos en contacto con usted.'));
		die($output);
	}
}
?>