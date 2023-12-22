<?php
@ $id_product = $_POST['id_product'];
@ $id_order = $_POST['id_order'];
@ $quantity = $_POST['cantidad'];

if ($quantity > 999) {
	echo "<script>alert('No se pueden comprar más de 999 unidades de un producto');history.back();</script>";
	exit;
}

include('conexBD.php');


if($quantity == 0){
    $query= "delete from order_products where id_product = ".$id_product." AND id_pedido = ".$id_order."";
    //echo "<br>" . $query . "<br>";
    $resultado = mysqli_query($db,$query);
    if($resultado){
        echo "<script>history.go(-1);</script>";
    }
}

else{
    $query= "update order_products set quantity = ".$quantity." where id_product = ".$id_product." AND id_pedido = ".$id_order."";
    //echo "<br>" . $query . "<br>";
    $resultado = mysqli_query($db,$query);
    if($resultado){
        echo "<script>history.go(-1);</script>";
    }
}



?>