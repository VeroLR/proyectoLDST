<?php
    session_start(); 
    include ('header.php');
    include ('signin.php');
    $_SESSION['privilege'] = $privilege;
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
?>
  <div class="form-productos">
        <br> </br>
        <br> </br>
        <br> </br>
        <br> </br>
        <form action="buscador.php" method="POST">
        <div class="product-title">Añadir producto</div>
        <br> </br>
      
          <input type="hidden" value=<?php echo $mensaje?> name="mensaje"/></input>
          <select name="category">
            <option value="">Categoría</option>
            <option value="Objetos">Objetos</option>
            <option value="Karts">Karts</option>
            <option value="Alas">Alas</option>
            </select>
          <input class="input-sign-in-up" type="text" name="busqueda" placeholder="Palabra clave" /></input>
          <input class="input-sign-in-up" type="float" name="price_max" placeholder="Precio máximo" /></input>
          <input class="input-sign-in-up" type="float" name="price_min" placeholder="Precio mínimo" /></input>
          <input class="input-sign-in-up" type="checkbox" name="discount">Mostrar solo productos con descuento
          <br> </br>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
</div>
