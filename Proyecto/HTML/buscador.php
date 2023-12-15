<?php

include('conexBD.php');

@ $mensaje = $_POST['mensaje'];
@ $busqueda = $_POST['busqueda'];
@ $category = $_POST['category'];
@ $price_max = $_POST['price_max'];
@ $price_min = $_POST['price_min'];
@ $discount = $_POST['discount'];

$busqueda=trim($busqueda);
$busqueda=addslashes($busqueda);

if($discount){
}
else $discount = NULL;

$query="select * from products where ('".$busqueda."' IS NULL OR product_name like '%" . $busqueda . "%' OR description like '%" . $busqueda . "%' OR category like '%" . $busqueda . "%' ) AND ('".$category."' IS NULL OR category LIKE '%" . $category . "%') AND ('".$discount."' IS NULL OR ('".$discount."' IS NOT NULL AND discount!=0)) AND ('" . $price_max . "' IS NULL OR ('" . $price_max . "' IS NOT NULL AND ((discount=0 AND product_price < '" . $price_max ."') OR (discount!=0 AND discount < '". $price_max ."'))))"; //AND ('" . $price_min. "' IS NULL OR ((discount IS NULL AND product_price > '%" . $price_min . "%') OR (discount IS NOT NULL AND discount > '%" . $price_min . "%')))";

//AND ('" . $price_max . "' IS NULL OR product_price < '%" . $price_max . "%') AND ('" . $price_min . "' IS NULL OR product_price > '%" . $price_min . "%') AND ('".$discount."' IS NULL OR ('".$discount."' IS NOT NULL AND discount IS NOT NULL))
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

if($num>0){
 header("Location: mostrar_busqueda.php?mensaje='".$mensaje."'&privilege='".$_SESSION['privilege']."'>&query=".$query."");
}

else{
    echo "<script>alert('No existen coincidencias');</script>";
}

