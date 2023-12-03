<?php
    include('conexBD.php');

    $id_product= isset($_GET['id_product']) ? $_GET['id_product'] : '';

    $query="delete from products where id_product=".$id_product."";
    $resultado = mysqli_query($db,$query);
    if($resultado==1){
        header('Location: CRUD.php?mensaje=bienvenido&privilege='.$_SESSION["privilege"].'');
        echo "<script>alert('Producto eliminado correctamente');</script>";
    }
?>