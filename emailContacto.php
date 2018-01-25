<?php
	session_start(); 
	$email = strtolower ($_POST ['Email']);
	$nombre = $_POST ['Nombre'];
	$telefono = $_POST ['Telefono'];
	$mensaje = $_POST ['Mensaje'];

		// =========================envio de correo notificandome que alguien se contacto ===================
		$destino ="info@medwaycarepr.com";
		$asunto = "Contact Medway Web - Contacting";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="Hello, someone has contacted you through the web form medway<br><br>
		Data sent are:<br>
		<b>Email: </b>$email<br>
		<b>Name: </b>$nombre<br>
		<b>Phone: </b>$telefono<br>
		<b>Message:  </b>$mensaje<br>"; //ojo el final de esta linea es importante!!!				
		$yourWebsite = "medwaycarepr.com";
		$yourEmail   = "info@medwaycarepr.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);			
			
		// ========================envio de correo al cliente ===================
		$destino = $email;
		$asunto = "Thank you for contacting us - Making travel easy and accesible since 2001";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="In Medway we're here to help!<br><br>
        Hello <b>$nombre</b>,<br>        
		For us it is a pleasure to serve you, soon one of our operators will contact you!<br>
        <br><br>        
        Your friends in Medway.<br>
		<img src='http://www.medwaycarepr.com/img/logo.gif' />
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>		
		<p>
		<img src='http://www.medwaycarepr.com/img/logotabin.png'/ width='78px' height='21px'>		
		Designed by <a href='http://www.tabin.com.ve'>tabinsoft<br></a>	
		© tabinsoft 2016 - All rights reserved<br></h5>	
		</p>";		
		
		$yourWebsite = "medwaycarepr.com";
		$yourEmail   = "info@medwaycarepr.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);			
		$data=array("exito" => '1');
		die(json_encode($data));	
?>