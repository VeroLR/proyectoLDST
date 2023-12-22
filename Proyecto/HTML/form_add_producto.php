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
        <form action="productos_add.php" method="POST">
        <div class="product-title">Añadir producto</div>
        <br> </br>
          
		  <select name="category">
            <option value="">Categoría</option>
            <option value="Objetos">Objetos</option>
            <option value="Karts">Karts</option>
            <option value="Alas">Alas</option>
            </select>
          
          <input class="input-sign-in-up" type="text" name="product_name" placeholder="Nombre" /></input>
          <input class="input-sign-in-up" type="text" name="description" placeholder="Descripción" /></input>
          <input class="input-sign-in-up" type="float" name="product_price" placeholder="Precio" /></input>
		      <input class="input-sign-in-up" type="float" name="discount" placeholder="Descuento (opcional)" /></input>
          <input class="input-sign-in-up" type="text" name="image_src" placeholder="Ruta de imagen"/></input>
          <input type="hidden" value=<?php echo $mensaje;?> name="mensaje"/></input>
          <br> </br>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
</div>
