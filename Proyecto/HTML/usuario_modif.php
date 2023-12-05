<?php

@ $email = $_POST['email'];
@ $name = $_POST['name'];
@ $password = $_POST['password'];
@ $surnames = $_POST['surnames'];
@ $phone_number = $_POST['phone_number'];
@ $address = $_POST['address'];
@ $city = $_POST['city'];
@ $birthdate = $_POST['birthdate'];


$email=trim($email);
$name=trim($name);
$password=trim($password);
$surnames=trim($surnames);
$phone_number = trim($phone_number);
$address = trim($address);
$city = trim($city);
$birthdate=trim($birthdate);


if(!$email || !$name || !$password || !$surnames || !$birthdate){
	echo "<script>alert('Faltan datos');history.back();</script>";
	exit;
}


/*Comprobación del formato de nombre correcto*/
$patronNombre = '/([A-Za-z]+)/';

if (preg_match($patronNombre, $name)==0) {
	echo "<script>alert('Formato de nombre inválido');history.back();</script>";
	exit;
}

/*Comprobación del formato de apellidos correcto*/
$patronApellidos = '/([A-Za-z]+)/';

if (preg_match($patronApellidos, $surnames)==0) {
	echo "<script>alert('Formato de apellidos inválido');history.back();</script>";
	exit;
}

/*Comprobación del formato de correo correcto*/
$patronCorreo = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if (preg_match($patronCorreo, $email)==0) {
	echo "<script>alert('Formato de correo inválido');history.back();</script>";
	exit;
}

/*Comprobación número teléfono correcto*/
$patronNum = '/[0-9]/';

if($phone_number){
    if (preg_match($patronNum, $phone_number)==0) {
        echo "<script>alert('El número de teléfono solo puede incluir caracteres numéricos');history.back();</script>";
        exit;
    }
}
/*Comprobación del formato de fecha correcto*/
$patronFecha = '#[0-9]{2}[-\/][0-9]{2}[-\/][0-9]{4}#';
$fechaTexto = $birthdate; 

if (preg_match($patronFecha, $fechaTexto)) {
	$separadores = ['-', '/', '|', '.','~',' de ']; 

	$partesFecha = null;
	
	
	foreach ($separadores as $separador) {
		$partesFecha = explode($separador, $fechaTexto); /* en partesFecha tenemos [dd,mm,yyyy] */
	
		if (count($partesFecha) === 3) {
			break; 
		}
	}
	
	$month = $partesFecha[1];
	$day = $partesFecha[0];
	$year = $partesFecha[2];

	if (checkdate($month, $day, $year)) {
			$fechaOrdenada= implode("-", array_reverse($partesFecha));
	} 
	
	else {
		echo "<script>alert('Fecha inválida');history.back();</script>";
		exit;
	}
} 
else{
	echo "<script>alert('Formato de fecha inválido');history.go(-2);</script>";
	exit;
}



$email=addslashes($email);
$name=addslashes($name);
$password=addslashes($password);
$surnames=addslashes($surnames);
$phone_number=addslashes($phone_number);
$address=addslashes($address);
$city=addslashes($city);
$birthdate=addslashes($fechaOrdenada);

include('conexBD.php');


//UPDATE
$query= "update users set name = '".$name."', password = '".$password."', surnames = '".$surnames."', phone_number = '".$phone_number."', address = '".$address."', city = '".$city."', birthdate = '".$birthdate."' where email = '".$email."'";
echo "<br>" . $query . "<br>";
$resultado = mysqli_query($db,$query);
if($resultado){
	echo "<script>alert('Registro realizado con éxito');history.back();</script>";
}

?>