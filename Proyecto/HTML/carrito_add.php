<?php
include('conexBD.php');
$id_product = isset($_GET['id_product']) ? $_GET['id_product'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';

//Obtenemos el pedido activo del usuario activo
$query="select * from orders where email like '".$email."' AND status like 1";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

if($num == 1)
$row=mysqli_fetch_array($resultado);

//Si no existe lo creamos
else{
    $fechaHoraActual = date("Y-m-d H:i:s");
    $query="insert into orders values (NULL,'".$email."',1,0,'".$fechaHoraActual."')"; 
    //echo "<br>" . $query . "<br>";
    $resultado = mysqli_query($db,$query);
    if($resultado){
        echo "<script>history.go(0);</script>";
    }
}


$id_order=$row['id_order'];


//Comprobamos que ese producto no existe ya en la cesta
$query="select * from order_products where id_pedido like '".$id_order."' AND id_product like '".$id_product."'";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);
if($num == 0){
    $query="insert into order_products values ('".$id_order."','".$id_product."','1')"; 
    //echo "<br>" . $query . "<br>";
    $resultado = mysqli_query($db,$query);
    if($resultado){
        echo "<script>history.go(-1);</script>";
    }
}

else{
    $row=mysqli_fetch_array($resultado);
    $quantity = $row['quantity'] + 1;
    $query="update order_products set quantity = '".$quantity."' where id_pedido = '".$id_order."' AND id_product = '".$id_product."'"; 
    //echo "<br>" . $query . "<br>";
    $resultado = mysqli_query($db,$query);
    if($resultado){
        echo "<script>history.go(-1);</script>";
    }
}
