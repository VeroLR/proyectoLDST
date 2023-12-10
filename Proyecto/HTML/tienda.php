<?php
session_start();

$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
$privilege=0;
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
  <div class="welcome-message">
    <?php
        echo $mensaje_bienvenida; 
    ?>
  </div>
  <!-- BANNER DE INICIO DE PÁGINA -->
  <div class="home-banner-container" id="home">
    <img id="banner-img1" src="../IMAGENES/Logo/OBJECT_MARKET.svg">
    <img id="banner-img2" src=" https://mariokarttour.com/_nuxt/img/d85c816.png" alt="Mario acelerando en un kart">
    <div class="slide">      
      <img id="banner-img3" src="https://mariokarttour.com/_nuxt/img/b6a3541.jpg" alt="Imágenes de circuitos de MarioKart Tour">
      <img id="banner-img4" src="https://mariokarttour.com/_nuxt/img/b6a3541.jpg" alt="Imágenes de circuitos de MarioKart Tour">
    </div>
  </div>

  <!--Include del inicio de sesión-->
  <?php
    include ('signin.php');
  ?>

  </div>

  <!-- SECCIÓN PRINCIPAL DONDE APARECERÁN LOS OBJETOS A COMPRAR/VENDER -->
  <main class="catalogue" id="catalogue">

    <!-- SECCIÓN DE OBJETOS -->
    <section class="categories" id="objects"> 
      <div class="catalog-title">
        <header>
          <h2 class="catalog-h2">OBJETOS</h2>
        </header>
      </div>
      <div class="card-container">

<?php
include('conexBD.php');

$query="select * from products where category='Objetos'";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

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
              <img src="../../Proyecto/IMAGENES/Thumbs/Objetos/<?php echo $row['image_src']; ?>" alt="<?php echo $row['product_name']; ?>">
            </div>
            <div class="product-details">
              <span class="product-category"><?php echo $row['category']; ?></span>
              <h4><a href="articulo.php?id_product=<?php echo $row['id_product']; ?>&mensaje=<?php echo $mensaje; ?>&privilege=<?php echo $privilege; ?>"><?php echo $row['product_name']; ?></a></h4>
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
                  <?php
                    if ($mensaje=='bienvenido') {
                      echo'<div class="tooltip-container">
                      <span class="tooltip-like-cart">Me gusta</span>
                        <a href=""><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="tooltip-container">
                        <span class="tooltip-like-cart">Añadir al carrito</span>
                          <a href=carrito_add.php?id_product='.$row['id_product'].'&email='.$_SESSION['email'].'&mensaje=".$mensaje."&privilege=".$_SESSION["privilege"]."><i class="fa fa-shopping-cart"></i></a>
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
    </section>

    <!-- SECCIÓN DE KARTS -->
    <section class="categories" id="karts">
      <div class="catalog-title">
        <header>
          <h2 class="catalog-h2">KARTS</h2>
        </header>
      </div>
      <div class="card-container">
      <?php
include('conexBD.php');

$query="select * from products where category='Karts'";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

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
              <img src="../../Proyecto/IMAGENES/Thumbs/Karts/<?php echo $row['image_src']; ?>" alt="<?php echo $row['product_name']; ?>">
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
                  <?php
                    if ($mensaje=='bienvenido') {
                      echo'<div class="tooltip-container">
                      <span class="tooltip-like-cart">Me gusta</span>
                        <a href=""><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="tooltip-container">
                        <span class="tooltip-like-cart">Añadir al carrito</span>
                        <a href=carrito_add.php?id_product='.$row['id_product'].'&email='.$_SESSION['email'].'&mensaje=".$mensaje."&privilege=".$_SESSION["privilege"]."><i class="fa fa-shopping-cart"></i></a>
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
    </section>

    <!-- SECCIÓN DE ALAS -->
    <section class="categories" id="wings">
      <div class="catalog-title">
        <header>
          <h2 class="catalog-h2">ALAS</h2>
        </header>
      </div>
      <div class="card-container">
      <?php
include('conexBD.php');

$query="select * from products where category='Alas'";
$resultado = mysqli_query($db,$query);
$num = mysqli_num_rows($resultado);

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
              <img src="../../Proyecto/IMAGENES/Thumbs/Alas/<?php echo $row['image_src']; ?>" alt="<?php echo $row['product_name']; ?>">
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
                  <?php
                    if ($mensaje=='bienvenido') {
                      echo'<div class="tooltip-container">
                      <span class="tooltip-like-cart">Me gusta</span>
                        <a href=""><i class="fa fa-heart"></i></a>
                      </div>
                      <div class="tooltip-container">
                        <span class="tooltip-like-cart">Añadir al carrito</span>
                        <a href=carrito_add.php?id_product='.$row['id_product'].'&email='.$_SESSION['email'].'&mensaje=".$mensaje."&privilege=".$_SESSION["privilege"]."><i class="fa fa-shopping-cart"></i></a>
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
    </section>

    <!-- Añadimos desde una CDN los scripts necesarios para que el carrusel de fotos funcione correctamente -->
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
  
  </main>

  <!--Include del footer-->
  <?php
    include ('footer.php');
  ?>
</body>
</html>