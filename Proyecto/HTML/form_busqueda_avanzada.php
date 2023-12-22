<?php
    session_start(); 
    include ('header.php');
    include ('signin.php');
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
?>
  <div class="form-productos">
        <br> </br>
        <br> </br>
        <br> </br>
        <br> </br>
        <form action="mostrar_busqueda.php" method="POST">
        <div class="product-title">Búsqueda avanzada</div>
        <br> </br>
      
          <input type="hidden" value=<?php echo $mensaje?> name="mensaje"/></input>
          <select name="category">
            <option value="">Categoría</option>
            <option value="Objetos">Objetos</option>
            <option value="Karts">Karts</option>
            <option value="Alas">Alas</option>
            </select>
          <input class="input-sign-in-up" type="text" name="busqueda" placeholder="Palabra clave" /></input>
          <input class="input-sign-in-up" type="float" name="price_min" placeholder="Precio mínimo" /></input>
          <input class="input-sign-in-up" type="float" name="price_max" placeholder="Precio máximo" /></input>
          Mostrar solo productos con descuento <input type="checkbox" name="discount"></input>
          <br> </br>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
</div>
