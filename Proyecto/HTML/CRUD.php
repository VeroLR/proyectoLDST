<?php
include('conexBD.php');

// Mostrar usuarios

$query="select * from users";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

echo "El num de users encontrados es: " . $num . "<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<td>Email</td><td>Nombre</td><td>Apellidos</td><td>Modificar</td><td>Eliminar</td>";
echo "</tr>";


for($i=0;$i<$num;$i++){
  $row=mysqli_fetch_array($resultado);
  echo "<tr>";
  echo "<td>".$row['email']."</td>";
  echo "<td>".$row['name']."</td>";
  echo "<td>".$row['surnames']."</td>";
  echo "<td><a href='modificar_usuario.php?email=".$row['email']."'>Modificar</a></td>";
  echo "<td><a href='eliminar_usuario.php?email=".$row['email']."'>Eliminar</a></td>";
  echo "</tr>";
}
echo "</table><br><br></br></br>";

// Mostrar productos

$query1="select * from products";
$resultado1 = mysqli_query($db,$query1);
$num1 = mysqli_num_rows($resultado1);

echo "El num de productos encontrados es: " . $num1 . "<br>";

echo "<table border='1'>";
echo "<tr>";
echo "<td>Nombre</td><td>Categoría</td><td>Descripción</td><td>Precio</td><td>Descuento</td><td>Modificar</td><td>Eliminar</td>";
echo "</tr>";


for($i=0;$i<$num1;$i++){
  $row1=mysqli_fetch_array($resultado1);
  echo "<tr>";
  echo "<td>".$row1['product_name']."</td>";
  echo "<td>".$row1['category']."</td>";
  echo "<td>".$row1['description']."</td>";
  echo "<td>".$row1['product_price']."</td>";
  echo "<td>".$row1['discount']."</td>";
  echo "<td><a href='modificar_producto.php?id_product=".$row1['id_product']."'>Modificar</a></td>";
  echo "<td><a href='eliminar_producto.php?id_product=".$row1['id_product']."'>Eliminar</a></td>";
  echo "</tr>";
}
echo "</table>";
?>
