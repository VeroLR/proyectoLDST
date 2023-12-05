<?php
session_start();
include('conexBD.php');
include ('header.php');
include ('signin.php');
$_SESSION['privilege'] = $privilege;
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
// Mostrar usuarios

$query="select * from users";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);
?>
<div class="users-title">  Usuarios</div>

<?php
echo '<div class="num-results"><i class="fa-solid fa-plus"> </i><a href="form_add_usuario.php?mensaje=bienvenido&privilege="'.$_SESSION["privilege"].'">Añadir un nuevo usuario</a><br></br></div>';
echo "<div class='num-results'>El número de usuarios encontrados es: " . $num . "</div><br></br>";

echo "<table class='tabla-users' border='1'>";
echo "<tr>";
echo "<td align='center'><b>Email</b></td>
      <td align='center'><b>Nombre</b></td>
      <td align='center'><b>Apellidos</b></td>
      <td align='center'><b>Modificar</b></td>
      <td align='center'><b>Eliminar</b></td>";
echo "</tr>";


for($i=0;$i<$num;$i++){
  $row=mysqli_fetch_array($resultado);
  echo "<tr>";
  echo "<td><b>".$row['email']."</b></td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['surnames']."</td>";
  echo "<td><a href='form_modificar_usuario.php?email=".$row['email']."&mensaje=bienvenido&privilege=".$_SESSION["privilege"]."'>Modificar</a></td>";
  echo "<td><a href='eliminar_usuario.php?email=".$row['email']."'>Eliminar</a></td>";
  echo "</tr>";
}
echo "</table><br><br>";

// Mostrar productos

$query1="select * from products";
$resultado1 = mysqli_query($db,$query1);
$num1 = mysqli_num_rows($resultado1);
?>

<div class="users-title"> Productos</div>

<?php
echo '<div class="num-results"><i class="fa-solid fa-plus"> </i><a href="form_add_producto.php?mensaje=bienvenido&privilege="'.$_SESSION["privilege"].'">Añadir un nuevo producto</a><br></br></div>';
echo "<div class='num-results'>El número de productos encontrados es: " . $num1 . "</div><br></br>";
echo "<table class='tabla-users' border='1'>";
echo "<tr>";
echo "<td align='center'><b>Nombre</b></td>
      <td align='center'><b>Categoría</b></td>
      <td align='center'><b>Descripción</b></td>
      <td align='center'><b>Precio</b></td>
      <td align='center'><b>Descuento</b></td>
      <td align='center'><b>Modificar</b></td>
      <td align='center'><b>Eliminar</b></td>";
echo "</tr>";


for($i=0;$i<$num1;$i++){
  $row1=mysqli_fetch_array($resultado1);
  echo "<tr>";
  echo "<td><b>".$row1['product_name']."</b></td>";
  echo "<td>".$row1['category']."</td>";
  echo "<td>".$row1['description']."</td>";
  echo "<td>".$row1['product_price']."</td>";
  echo "<td>".$row1['discount']."</td>";
  echo "<td><a href='form_modificar_producto.php?id_product=".$row1['id_product']."&mensaje=bienvenido&privilege=".$_SESSION["privilege"]."'>Modificar</a></td>";
  echo "<td><a href='eliminar_producto.php?id_product=".$row1['id_product']."'>Eliminar</a></td>";
  echo "</tr>";
}
echo "</table><br><br></br></br>";
?>
