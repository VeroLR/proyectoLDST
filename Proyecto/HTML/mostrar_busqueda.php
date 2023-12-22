<?php
session_start();
@ $mensaje = $_POST['mensaje'];
include('conexBD.php');
include ('header.php');
include ('signin.php');



@ $busqueda = $_POST['busqueda'];
@ $category = $_POST['category'];
@ $price_min = $_POST['price_min'];
@ $price_max = $_POST['price_max'];
@ $discount = $_POST['discount'];

$mensaje=trim($mensaje);
$busqueda=trim($busqueda);
$price_min=trim($price_min);
$price_max=trim($price_max);

$patronPrecio = '/^[0-9]*(\.[0-9]*)?$/';

if (preg_match($patronPrecio, $price_max)==0) {
	echo "<script>alert('Formato de precio inválido');history.back();</script>";
	exit;
}

if (preg_match($patronPrecio, $price_min)==0) {
	echo "<script>alert('Formato de precio inválido');history.back();</script>";
	exit;
}



$mensaje=addslashes($mensaje);
$busqueda=addslashes($busqueda);
$price_min=addslashes($price_min);
$price_max=addslashes($price_max);


    if($discount!=0){
      $query="select * from products where ('".$busqueda."' IS NULL OR product_name like '%" . $busqueda . "%' OR description like '%" . $busqueda . "%' OR category like '%" . $busqueda . "%' ) AND ('".$category."' IS NULL OR '".$category."' = '' OR category LIKE '". $category ."') AND discount != 0 AND ('" . $price_max . "'=0 OR ('" . $price_max . "'!=0 AND ((discount = 0 AND product_price <= '" . $price_max ."') OR (discount != 0 AND discount <= '" . $price_max ."')))) AND ('" . $price_min . "'=0 OR ('" . $price_min . "'!=0 AND ((discount = 0 AND product_price >= '" . $price_min ."') OR (discount != 0 AND discount >= '" . $price_min ."'))))";
    }
    else{
      $query="select * from products where ('".$busqueda."' IS NULL OR product_name like '%" . $busqueda . "%' OR description like '%" . $busqueda . "%' OR category like '%" . $busqueda . "%' ) AND ('".$category."' IS NULL OR '".$category."' = '' OR category LIKE '". $category ."') AND ('" . $price_max . "'=0 OR ('" . $price_max . "'!=0 AND ((discount = 0 AND product_price <= '" . $price_max ."') OR (discount != 0 AND discount <= '" . $price_max ."')))) AND ('" . $price_min . "'=0 OR ('" . $price_min . "'!=0 AND ((discount = 0 AND product_price >= '" . $price_min ."') OR (discount != 0 AND discount >= '" . $price_min ."'))))"; 
    }

    $resultado = mysqli_query($db,$query);
    $num = mysqli_num_rows($resultado);
?>
<p class="num-results">Número de coincidencias: <?php echo $num?></p>
<div><br></br></div>
<div class="card-container">
  <?php
    for($i=0;$i<$num;$i++){
        $row=mysqli_fetch_array($resultado);
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
          </div>
        </article>

        <?php
          }
        ?>
</div>        

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
      $(document).ready(function(){ /* Cuando todo el documento esté cargado se podrá utilizar el carrusel */
        $('.card-container').slick({ /* Poner $ o jQuery es lo mismo */
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
      });
    });
  </script>
