<?php
    include('conexBD.php');

    $email= isset($_GET['email']) ? $_GET['email'] : '';

    $query="delete from users where email='".$email."'";
    $resultado = mysqli_query($db,$query);
    if($resultado==1){
        header('Location: CRUD.php?mensaje=bienvenido&privilege='.$_SESSION["privilege"].'');
        echo "<script>alert('Usuario eliminado correctamente');</script>";
    }
?>