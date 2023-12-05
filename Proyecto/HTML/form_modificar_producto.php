<?php
    session_start();  
    include('conexBD.php');
    include ('header.php');
    include ('signin.php');
    $_SESSION['privilege'] = $privilege;
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
    $id_product = isset($_GET['id_product']) ? $_GET['id_product'] : '';

    $query="select * from products where id_product = ".$id_product."";
    $resultado = mysqli_query($db,$query);
    $row=mysqli_fetch_array($resultado);
?>
  <div class="form-productos">
        <br> </br>
        <br> </br>
        <br> </br>
        <br> </br>
        <form action="productos_modif.php" method="POST">
        <div class="product-title">Modificar producto</div>
        <br> </br>
          
		  <select name="category">
            <option value=<?php echo $row['category'];?>><?php echo $row['category'];?></option>
            <option value="Objetos">Objetos</option>
            <option value="Karts">Karts</option>
            <option value="Alas">Alas</option>
            </select>
          
          <input type="hidden" value=<?php echo $id_product?> name="product_id"/></input>
          <?php
            $product_name = $row['product_name'];
            $product_nameArray = explode(' ', $product_name);
          ?>
          <input class="input-sign-in-up" type="text" name="product_name" value = <?php foreach($product_nameArray as $word){echo $word.'&nbsp;';} ?> placeholder="Nombre"  /></input> 
          <?php
            $description = $row['description'];
            $descriptionArray = explode(' ', $description);
          ?>
          <input class="input-sign-in-up" type="text" name="description" value = <?php foreach($descriptionArray as $word){echo $word.'&nbsp;';} ?> placeholder="Descripción" /></input>
          <input class="input-sign-in-up" type="float" name="product_price" value = <?php echo $row['product_price']; ?> placeholder="Precio" ></input>
		      <input class="input-sign-in-up" type="float" name="discount" value = <?php echo $row['discount']; ?> placeholder="Descuento (opcional)" ></input>
          <input class="input-sign-in-up" type="text" name="image_src" value = <?php echo $row['image_src']; ?> placeholder="Ruta de imagen" /></input>
          <br> </br>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
</div>
