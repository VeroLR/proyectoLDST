<?php

include('conexBD.php');

@ $busqueda = $_POST['busqueda'];
$busqueda=trim($busqueda);
$busqueda=addslashes($busqueda);

$query="select * from products where product_name like '%" . $busqueda . "%' or description like '%" . $busqueda . "%' or category like '%" . $busqueda . "%'";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

if($num>0){
    header("Location: mostrar_busqueda.php?mensaje=bienvenido&privilege='".$_SESSION['privilege']."'>&query=".$query."");
}

else{
    echo "<script>alert('No existen coincidencias');</script>";
}

