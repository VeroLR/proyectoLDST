<?php
session_start();
include('conexBD.php');
include ('header.php');
include ('signin.php');
$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
$email = $_SESSION['email'];


//Obtenemos el pedido activo del cliente deseado
$query="select * from orders where email like '".$email."' AND status like 1";
$resultado = mysqli_query($db,$query);
$row=mysqli_fetch_array($resultado);
$num = mysqli_num_rows($resultado);

if($num == 1){

    $id_order = $row['id_order'];
    $total_price = 0;

    //Obtenemos los productos de ese pedido
    $query="select * from order_products where id_pedido like '".$id_order."'";
    $pedido = mysqli_query($db,$query);
    $num = mysqli_num_rows($pedido);

    ?>
    <br></br>
    <div class="card-container">
    <?php

    for($i=0;$i<$num;$i++){ 
        $row_pedido=mysqli_fetch_array($pedido);
        $id_product=$row_pedido['id_product']; //Para cada entrada de productos del pedido obtenemos la id_producto
        $quantity=$row_pedido['quantity'];     //Para cada tipo de producto obtenemos la cantidad de productos

        $query="select * from products where id_product like '".$id_product."'";
        $resultado = mysqli_query($db,$query);
        $row=mysqli_fetch_array($resultado);

        if($row['discount']!=0)$total_price = $total_price + $row['discount']*$quantity;

        else $total_price = $total_price + $row['product_price']*$quantity;

    ?>

    <article class="card">
            <div class="product-card">
            <?php 
                if($row['discount']!=0){
                echo'<div class="badge">¡Oferta!</div>';
                }
            ?>
            <div class="product-tumb">
                <img src="../../Proyecto/IMAGENES/Thumbs/<?php echo $row['category']; ?>/<?php echo $row['image_src']; ?>" alt="<?php echo $row['product_name']; ?>">
            </div>
            <div class="product-details">
                <span class="product-category"><?php echo $row['category']; ?></span>
                <h4><a href="../../Proyecto/HTML/articulo.php?id_product=<?php echo $row['id_product']; ?>"><?php echo $row['product_name']; ?></a></h4>
                <p class="description"><?php echo $row['description']; ?></p>
                <div class="product-bottom-details">
                    <div class="product-price">
                        <?php
                            if($row['discount']!=0){
                                echo '<small>'.$row['product_price'].'€</small>';
                                echo $row['discount'].'€'; 
                            }
                            else{
                                echo $row['product_price'].'€'; 
                            }
                        ?>
                    </div>
                    <div class="product-links">
                        <div class="tooltip-container">
                            <form action="carrito_modif.php" method="POST">
                                <p class="cantidad">Cantidad:
                                <input type="number" value=<?php echo $quantity?> id="cantidad" name="cantidad" min=0>
                                <input type="hidden" value=<?php echo $id_product?> name="id_product"/></input>
                                <input type="hidden" value=<?php echo $id_order?> name="id_order"/></input>
                                </p>
                                <p><input  class="confirmar" type="submit" value="Confirmar"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </article>
        
    <?php
        }
        $query="select * from users where email like '".$email."'";
        $resultado = mysqli_query($db,$query);
        $row=mysqli_fetch_array($resultado);
    ?>
    </div>
    <div class="form-productos">
        <br> </br>
        <br> </br>
        <br> </br>
        <form action="compra.php" method="POST">
        <div class="product-title">Datos de compra:</div>
        <br> </br>
            <input type="hidden" value=<?php echo $id_order?> name="id_order"/></input>
            <input type="hidden" value=<?php echo $total_price?> name="total_price"/></input>

            <input type="hidden" value=<?php echo $email?> name="email"/></input>

            <input class="input-sign-in-up" type="text" name="phone_number" placeholder="Número de teléfono" value=<?php if($row['phone_number']) echo $row['phone_number']; ?> ></input>
            
            <?php
                if($row['address']){
                $address = $row['address'];
                $addressArray = explode(' ', $address);
                }
            ?>
            <input class="input-sign-in-up" type="text" name="address" placeholder="Dirección" value=<?php if($row['address']){foreach($addressArray as $word){echo $word.'&nbsp;';}} ?>></input>
            
            <?php
                if($row['city']){
                $city = $row['city'];
                $cityArray = explode(' ', $city);
                }
            ?>
            <input class="input-sign-in-up" type="text" name="city" placeholder="Ciudad" value=<?php if($row['city']){foreach($cityArray as $word){echo $word.'&nbsp;';}} ?>></input>                
            
            </p>
            <p><input type="submit" value="Comprar"></p>
            <br></br>
            <br></br>
        </form>
    </div>
<?php
}
else{
?>
    <br> </br>
    <br> </br>
    <div class="product-title">Su cesta está vacía</div>
<?php
} 
?>

    