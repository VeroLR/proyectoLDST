<?php

@ $email = $_POST['email'];
@ $name = $_POST['name'];
@ $password = $_POST['password'];
@ $surnames = $_POST['surnames'];
@ $birthdate = $_POST['birthdate'];
@ $privilege = $_POST['privilege'];


$email=trim($email);
$name=trim($name);
$password=trim($password);
$surnames=trim($surnames);
$birthdate=trim($birthdate);
$privilege=trim($privilege);


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
if (strlen($name) > 30) {
	echo "<script>alert('El nombre debe tener 30 caracteres o menos');history.back();</script>";
	exit;
}

/*Comprobación del formato de apellidos correcto*/
$patronApellidos = '/([A-Za-z]+)/';

if (preg_match($patronApellidos, $surnames)==0) {
	echo "<script>alert('Formato de apellidos inválido');history.back();</script>";
	exit;
}
if (strlen($surnames) > 100) {
	echo "<script>alert('Los apellidos deben tener 100 caracteres o menos');history.back();</script>";
	exit;
}

/*Comprobación del formato de correo correcto*/
$patronCorreo = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if (preg_match($patronCorreo, $email)==0) {
	echo "<script>alert('Formato de correo inválido');history.back();</script>";
	exit;
}
if (strlen($email) > 50) {
	echo "<script>alert('El email debe tener 50 caracteres o menos');history.back();</script>";
	exit;
}
if (strlen($password) > 25) {
	echo "<script>alert('La contraseña debe tener 25 caracteres o menos');history.back();</script>";
	exit;
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
	echo "<script>alert('Formato de fecha inválido');history.back();</script>";
	exit;
}



$email=addslashes($email);
$name=addslashes($name);
$password=addslashes($password);
$surnames=addslashes($surnames);
$birthdate=addslashes($fechaOrdenada);
$privilege=addslashes($privilege);

if($privilege==='Administrador'){
	$privilege=1;
}

if($privilege==='Cliente'){
	$privilege=2;
}

include('conexBD.php');

$query1="select * from users where email='".$email."'";
$resultado1 = mysqli_query($db,$query1);
$num = mysqli_num_rows($resultado1);
if($num>0){
	echo "<script>alert('Email ya en uso');history.back();</script>";

}
else{

$query="insert into users values ('".$email."','".$name."','".$password."','".$surnames."',NULL,NULL,NULL,'".$birthdate."','".$privilege."')";

$resultado = mysqli_query($db,$query);
if($resultado)
	echo "<script>alert('Registro realizado con éxito');history.back();</script>";

}

?>