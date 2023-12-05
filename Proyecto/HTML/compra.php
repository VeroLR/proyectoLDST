<?php

@ $email = $_POST['email'];
@ $phone_number = $_POST['phone_number'];
@ $address = $_POST['address'];
@ $city = $_POST['city'];

@ $id_order = $_POST['id_order'];
@ $total_price = $_POST['total_price'];


$phone_number = trim($phone_number);
$address = trim($address);
$city = trim($city);


if(!$email || !$address || !$city || !$phone_number){
	echo "<script>alert('Faltan datos');history.back();</script>";
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


$phone_number=addslashes($phone_number);
$address=addslashes($address);
$city=addslashes($city);

include('conexBD.php');


//UPDATE USER
$query= "update users set phone_number = '".$phone_number."', address = '".$address."', city = '".$city."' where email = '".$email."'";
//echo "<br>" . $query . $total_price ."<br>";
$resultado = mysqli_query($db,$query);


//UPDATE ORDER
$fechaHoraActual = date("Y-m-d H:i:s"); 
$query= "update orders set status = 0, total_price = '".$total_price."', order_date = '".$fechaHoraActual."' where id_order = '".$id_order."'";
//echo "<br>" . $query . "<br>";
$resultado = mysqli_query($db,$query);
if($resultado){
	echo "<script>alert('Compra realizada con éxito');history.go(-2);</script>";
}

?>