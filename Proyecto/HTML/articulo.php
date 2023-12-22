
<?php
session_start();

$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
$id_product = isset($_GET['id_product']) ? $_GET['id_product'] : '';

$mensaje_bienvenida = '';
$estadoSesion = session_status();
if ($estadoSesion == PHP_SESSION_ACTIVE) {
  if ($mensaje === 'bienvenido') {
      $mensaje_bienvenida = "¡It's-a-me, " . $_SESSION['name'] . "!";
  }
}
?>
  
  <!--Include del header-->
  <?php
    include ('header.php');
  ?>

  <!--Include del inicio de sesión-->
  <?php
    include ('signin.php');
  ?>

<?php
include('conexBD.php');

$query="select * from products where id_product='".$id_product."'";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

$row=mysqli_fetch_array($resultado);
?>
    <div class="article-grid">

      <article class="article-product-card">
        <div class="article-image-container">
        <?php 
              if($row['discount']!=NULL){
                echo'<div class="badge">¡Oferta!</div>';
              }
          ?>
          <div class="article-product-tumb">
            <img src="../../Proyecto/IMAGENES/Thumbs/<?php echo $row['category']; ?>/<?php echo $row['image_src']; ?>" alt="<?php echo $row['product_name']; ?>">
          </div>
        </div>
      </article>

      <article class="article-product-card">
        <div class="article-product-details ">
          <span class="product-category"><?php echo $row['category']; ?></span>
          <h4><a><?php echo $row['product_name']; ?></a></h4>
          <p class="description"><?php echo $row['description']; ?></p>
          <div class="aticle-product-bottom-details">
            <div class="product-price">
            <small>
                    <?php
                      if($row['discount']!=NULL){
                        echo $row['discount']."€"; 
                      }
                    ?>
                  </small>
                  <?php echo $row['product_price']."€"; ?></div>
            <div class="product-links">
            <?php
                    if ($mensaje=='bienvenido') {
                      echo'<div class="tooltip-container">
                      <span class="tooltip-like-cart">Me gusta</span>
                        <a href=""><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="tooltip-container">
                        <span class="tooltip-like-cart">Añadir al carrito</span>
                          <a href=carrito_add.php?id_product='.$row['id_product'].'&email='.$_SESSION['email'].'&mensaje=".$mensaje."><i class="fa fa-shopping-cart"></i></a>
                      </div>';
                    }
                  ?>
            </div>
          </div>
        </div>
      </article>
        
    </div>


<!--Include del footer-->
<?php
    include ('footer.php');
  ?>
</body>
</html>
      