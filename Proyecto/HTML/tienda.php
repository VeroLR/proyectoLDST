<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: inicio_sesion.php');
    exit();
}

$mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';

$mensaje_bienvenida = '';

if ($mensaje === 'bienvenido') {
    $mensaje_bienvenida = "¡Bienvenido, " . $_SESSION['name'] . "!";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Etiquetas de mejora de posicionamiento web -->
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <meta name="author" content="Verónica Lechón, Alejandro González, Cristina Rodríguez ">
  <meta name="contact" content="bom@kingbowser.mk">
  <meta name="organization" content="MARIOKART™ Tour">
  <title>Compra y Venta de Artículos de MARIOKART™ Tour | Bowser Object Market</title>
  <meta name="description" content="Aprovecha las increíbles oportunidades de comprar artículos perfectos para derrotar a tus contrincantes en carreras de karts."> 
  <!-- Hojas de estilo asociadas -->
  <link rel='stylesheet' type='text/css' media='screen' href='../../Proyecto/CSS/main.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  <!-- Enlaza el archivo CSS de Font Awesome desde la CDN -->
  <link rel="stylesheet" type="text/css" href="../../Proyecto/CSS/slick.css">
  <link rel="stylesheet" type="text/css" href="../../Proyecto/CSS/slick-theme.css">
</head>

<body>
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
    <img id="banner-img1" src="../IMÁGENES/Logo/OBJECT_MARKET.svg">
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
        <article class="card">
          <div class="product-card">
            <div class="badge">¡Oferta!</div>
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/platanos.png" alt="Trío de plátanos">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="../../Proyecto/HTML/articulo.html">Trío de plátanos</a></h4>
              <p class="description">El kit ideal para hacer resbalar a tus enemigos hacia su perdición.</p>
              <div class="product-bottom-details">
                <div class="product-price"><small>$15.00</small>$10.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/caparazones.png" alt="Trío de caparazones rojos">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="">Trío de caparazones rojos</a></h4>
              <p class="description">Puntería asegurada para ganar el primer puesto.</p>
              <div class="product-bottom-details">
                <div class="product-price">$16.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/billbala.png" alt="Bullet Bill">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="">Bullet Bill</a></h4>
              <p class="description">Destrucción y poder para los más rezagados.</p>
              <div class="product-bottom-details">
                <div class="product-price">$25.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/caparazonazul.png" alt="Caparazón azul">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="">Caparazón azul</a></h4>
              <p class="description">Nada (o casi nada) podrá salvar al primer puesto de él.</p>
              <div class="product-bottom-details">
                <div class="product-price">$20.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/champiñones.png" alt="Trío de champiñones">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="">Trío de champiñones</a></h4>
              <p class="description">¡Turbos asegurados para recuperar posiciones!</p>
              <div class="product-bottom-details">
                <div class="product-price">$15.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/bocina.png" alt="Superbocina">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="">Superbocina</a></h4>
              <p class="description">Tumba a tus rivales y deshazte del temido caparazón azul.</p>
              <div class="product-bottom-details">
                <div class="product-price">$15.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/superchampiñon.png" alt="Mega Champiñón">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="">Mega Champiñón</a></h4>
              <p class="description">¡Aplasta a tus enemigos y déjalos atrás con su poder!</p>
              <div class="product-bottom-details">
                <div class="product-price">$16.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Productos/bobomb.png" alt="Bob-omb">
            </div>
            <div class="product-details">
              <span class="product-category">Objetos</span>
              <h4><a href="">Bob-omb</a></h4>
              <p class="description">Provocará una explosión de la que pocos podrán escapar.</p>
              <div class="product-bottom-details">
                <div class="product-price">$12.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/tubiturbo.png" alt="Tubiturbo">
            </div>
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Tubiturbo</a></h4>
              <p class="description">Características estándar para conductores novatos.</p>
              <div class="product-bottom-details">
                <div class="product-price">$240.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/camiontropical.png" alt="Camión Tropical">
            </div>
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Camión Tropical</a></h4>
              <p class="description">El poder de Hawaii al alcance de tus manos.</p>
              <div class="product-bottom-details">
                <div class="product-price">$450.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/bolidobala.png" alt="Bólido Bala Plateado">
            </div>
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Bólido Bala Plateado</a></h4>
              <p class="description">Máxima velocidad, ahora con un moderno acabado plateado.</p>
              <div class="product-bottom-details">
                <div class="product-price">$550.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/floruquad.png" alt="Floruquad">
            </div>
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Floruquad</a></h4>
              <p class="description">La gusano-moto más famosa del mercado.</p>
              <div class="product-bottom-details">
                <div class="product-price">$500.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/abejomovil.png" alt="Abejo-móvil">
            </div>
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Abejo-móvil</a></h4>
              <p class="description">¡Pica a tus rivales como una abeja para asegurar tu victoria!</p>
              <div class="product-bottom-details">
                <div class="product-price">$400.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/autobusdoble.png" alt="Autobús doble">
            </div>
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Autobús doble</a></h4>
              <p class="description">Dos plantas de esencia londinense para adelantar con estilo.</p>
              <div class="product-bottom-details">
                <div class="product-price">$470.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/cupidomovil.png" alt="Cupidomóvil">
            </div>
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Cupidomóvil</a></h4>
              <p class="description">El poder del querubín más famoso de toda Grecia te sorprenderá.</p>
              <div class="product-bottom-details">
                <div class="product-price">$380.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Karts/mininomovil.png" alt="Mininomóvil">
            </div>
            
            <div class="product-details">
              <span class="product-category">Karts</span>
              <h4><a href="">Mininomóvil</a></h4>
              <p class="description">¡Fans de los gatitos y la velocidad, este es vuestro kart!</p>
              <div class="product-bottom-details">
                <div class="product-price">$500.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="badge">¡Oferta!</div>
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/alamario.png" alt="Ala Mario de 8 Bits">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Ala Mario de 8 Bits</a></h4>
              <p class="description">Nuestro fontanero favorito surcando los cielos.</p>
              <div class="product-bottom-details">
                <div class="product-price"><small>$180.00</small>$99.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/grullaorigami.png" alt="Grulla Origami Carmesí">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Grulla Origami Carmesí</a></h4>
              <p class="description">Cultura japonesa garantizando el máximo planeo.</p>
              <div class="product-bottom-details">
                <div class="product-price">$210.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/globosplanta.png" alt="Globos Plantas Piraña">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Globos Plantas Piraña</a></h4>
              <p class="description">¡Cuidado, pueden morder a 100 metros de altura!</p>
              <div class="product-bottom-details">
                <div class="product-price">$190.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/paraestrella.png" alt="Paraestrella arcoíris">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Paraestrella arcoíris</a></h4>
              <p class="description">Un ala sideral para alcanzar los sitios más recónditos.</p>
              <div class="product-bottom-details">
                <div class="product-price">$240.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/parasolrosas.png" alt="Parasol Rosas">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Parasol Rosas</a></h4>
              <p class="description">Con un bonito motivo floral, hará de ti un conductor veloz y elegante.</p>
              <div class="product-bottom-details">
                <div class="product-price">$220.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/parasandwich.png" alt="Parasándwich">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Parasándwich</a></h4>
              <p class="description">Con una deliciosa aparencia para distraer a los más hambrientos.</p>
              <div class="product-bottom-details">
                <div class="product-price">$190.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/alaflor.png" alt="Ala Flor Sonriente">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Ala Flor Sonriente</a></h4>
              <p class="description">Podrá parecer amigable, pero su capacidad de planeo es de admirar.</p>
              <div class="product-bottom-details">
                <div class="product-price">$210.00</div>
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
        <article class="card">
          <div class="product-card">
            <div class="product-tumb">
              <img src="../../Proyecto/IMÁGENES/Thumbs/Alas/alacaballete.png" alt="Ala Caballete">
            </div>
            <div class="product-details">
              <span class="product-category">Alas</span>
              <h4><a href="">Ala Caballete</a></h4>
              <p class="description">Puro arte del siglo XVIII que te hará volar a otros tiempos.</p>
              <div class="product-bottom-details">
                <div class="product-price">$280.00</div>
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