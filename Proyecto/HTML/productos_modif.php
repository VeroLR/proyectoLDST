<?php
@ $id_product = $_POST['product_id'];

@ $category = $_POST['category'];
@ $product_name = $_POST['product_name'];
@ $description = $_POST['description'];
@ $product_price = $_POST['product_price'];
@ $discount = $_POST['discount'];
@ $image_src = $_POST['image_src'];


$category=trim($category);
$product_name=trim($product_name);
$description=trim($description);
$product_price=trim($product_price);
$discount=trim($discount);
$image_src=trim($image_src);


if(!$category || !$product_name || !$description || !$product_price || !$image_src){
	echo "<script>alert('Faltan datos');history.back();</script>";
	exit;
}

$patronPrecio = '/^[0-9]*(\.[0-9]*)?$/';

if (preg_match($patronPrecio, $product_price)==0) {
	echo "<script>alert('Formato de precio inválido');history.back();</script>";
	exit;
}

if (strlen($product_name) > 70) {
	echo "<script>alert('El nombre debe tener 70 caracteres o menos');history.back();</script>";
	exit;
}

if (strlen($image_src) > 200) {
	echo "<script>alert('La ruta de imagen debe tener 200 caracteres o menos');history.back();</script>";
	exit;
}

if ($product_price > 999999.99) {
	echo "<script>alert('El precio debe ser inferior a 999999.99€');history.back();</script>";
	exit;
}

if ($discount > 999999.99) {
	echo "<script>alert('El descuento debe ser inferior a 999999.99€');history.back();</script>";
	exit;
}

$category=addslashes($category);
$product_name=addslashes($product_name);
$description=addslashes($description);
$product_price=addslashes($product_price);
$discount=addslashes($discount);
$image_src=addslashes($image_src);

include('conexBD.php');


//UPDATE

$query= "update products set category = '".$category."', product_name = '".$product_name."', description = '".$description."', product_price = '".$product_price."', discount = '".$discount."', image_src = '".$image_src."' where id_product = '".$id_product."'";

echo "<br>" . $query . "<br>";
$resultado = mysqli_query($db,$query);
if($resultado){
	echo "<script>alert('Modificación realizada con éxito');history.go(-2);</script>";
}

?>