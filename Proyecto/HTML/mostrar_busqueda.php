<?php
    session_start();
    include('conexBD.php');
    include ('header.php');
    include ('signin.php');
    $_SESSION['privilege'] = $privilege;
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
    $query = isset($_GET['query']) ? $_GET['query'] : '';
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
              if($row['discount']!=NULL){
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
                  <small>
                    <?php
                      if($row['discount']!=NULL){
                        echo $row['discount']."€"; 
                      }
                    ?>
                  </small>
                  <?php echo $row['product_price']."€"; ?></div>
                <div class="product-links">
                  <div class="tooltip-container">
                    <span class="tooltip-like-cart">Me gusta</span>
                      <a href=""><i class="fa fa-heart"></i></a>
                  </div>
                  <div class="tooltip-container">
                    <span class="tooltip-like-cart">Añadir al carrito</span>
                      <a href=""><i class="fa fa-shopping-cart"></i></a>
                  </div>
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
