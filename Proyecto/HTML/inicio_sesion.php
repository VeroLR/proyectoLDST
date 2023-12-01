<?php

session_start();

$email = @$_POST['email'];
$password = @$_POST['password'];

$email = trim($email);
$password = trim($password);

$email = addslashes($email);
$password = addslashes($password);

include('conexBD.php');

$query = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";

$resultado = mysqli_query($db, $query);

if ($resultado) {
    $num = mysqli_num_rows($resultado);

    if ($num > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $usuario['name'];
        $_SESSION['privilege'] = $usuario['privilege'];

        header("Location: tienda.php?mensaje=bienvenido&privilege=".$_SESSION['privilege']."");
        exit();
    } 
    else {
        echo "<script>alert('Inicio de sesión fallido');history.back();</script>";
    }
} 
else {
    echo "Error en la consulta: " . mysqli_error($db);
}

?>