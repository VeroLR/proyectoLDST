<?php

@ $email = $_POST['email'];
@ $name = $_POST['name'];
@ $password = $_POST['password'];
@ $surnames = $_POST['surnames'];
@ $birthdate = $_POST['birthdate'];


$email=trim($email);
$name=trim($name);
$password=trim($password);
$surnames=trim($surnames);
$birthdate=trim($birthdate);


if(!$email || !$name || !$password || !$surnames || !$birthdate){
	echo "Faltan datos gilipollas";
	exit;
}

//Prepro fecha, comprobar...

$email=addslashes($email);
$name=addslashes($name);
$password=addslashes($password);
$surnames=addslashes($surnames);
$birthdate=addslashes($birthdate);


include('conexBD.php');

$query="insert into users values ('".$email."','".$name."','".$password."','".$surnames."',NULL,NULL,NULL,'".$birthday."',2)";
echo "<br>" . $query . "<br>";
$resultado = mysqli_query($db,$query);
if($resultado)
	echo "Sus datos son la ostia";



?>