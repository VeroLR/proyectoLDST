<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name="author" content="Verónica Lechón, Alejandro González, Cristina Rodríguez "/>
  <meta name="contact" content="bom@kingbowser.mk"/>
  <meta name="organization" content="MARIOKART™ Tour">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Artículo</title>
    <!-- Hojas de estilo asociadas -->
  <link rel='stylesheet' type='text/css' media='screen' href='../../Proyecto/CSS/articulo.css'>
  <link rel='stylesheet' type='text/css' media='screen' href='../../Proyecto/CSS/main.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../Proyecto/CSS/slick.css">
  <link rel="stylesheet" type="text/css" href="../../Proyecto/CSS/slick-theme.css">
</head>

<body>
    <nav class="top-bar-container"  id="home">
      <!-- IMAGEN DEL LOGO DE LA PÁGINA -->
      <div class="logo">
        <a href="../HTML/tienda.html">
          <img class="logo-img" src = "../../Proyecto/IMAGENES/Logo/BOM_SOLO.svg" alt="Logo">
        </a>
      </div>

      <!-- BUSCADOR CONTENIDO EN LA BARRA SUPERIOR -->
      <div class="search">
        <form class="search-bar">
          <input type="search" required class="input-search" placeholder="Buscar..." id="searchInput" aria-label="Busca cualquier producto">
          <label for="searchInput" class="search-button"><i class="fa fa-search"></i></label>
        </form>
      </div>

      <!-- ICONO INICIO DE SESIÓN -->
      <div class="sign-in-up-div">
        <div class="tooltip-container">
          <span class="tooltip-text">Iniciar sesión/Registrarse</span>
          <i class="fa-solid fa-user" id="signInUpIcon"></i>
        </div>
      </div>

      <!-- ICONO MENÚ HAMBURGUESA -->
      <svg id="hamburger" class="hamburger-lines" viewbox="0 0 60 40" onclick="toggle_menu()" aria-label="Menú lateral derecho">
        <g stroke="#000" stroke-width="4" stroke-linecap="round" stroke-linejoin="round">
            <path id="top-line" d="M10,10 L50,10 Z"></path>
            <path id="middle-line" d="M10,20 L50,20 Z"></path>
            <path id="bottom-line" d="M10,30 L50,30 Z"></path>
        </g>
      </svg>

      <!-- MENÚ LATERAL DERECHO -->
      <div id="menuItems" class="menu-items">
        <ul role="menu">
          <li><i class="fa-solid fa-house"></i><a href="#home" title="Inicio">Inicio</a></li>
          <li><i class="fa-solid fa-book-open"></i><a href="#catalogue" title="Catálogo">Catálogo</a>
            <details class="dropdown">
              <summary>
                <a class="button"></a>
              </summary>
              <ul>
                <li><a href="tienda.html#objects">Objetos</a></li>
                <li><a href="tienda.html#karts">Karts</a></li>
                <li><a href="tienda.html#wings">Alas</a></li>
              </ul>
            </details>
          </li>
          <li><i class="fa-regular fa-id-badge"></i><a href="#contact" title="Contacto">Contacto</a></li>
        </ul>
      </div>
    </nav>
  
  <!-- SCRIPT DE APERTURA Y CIERRE DEL MENÚ LATERAL DERECHO -->
  <script>
    function toggle_menu() {
      document.getElementById("menuItems").style.right = 0;
      var boton = document.getElementById("hamburger");
      boton.classList.add("transition-hamburger-menu");
      boton.onclick = close_menu;
    }
    function close_menu() {
      document.getElementById("menuItems").style.right = "-60%";
      var boton = document.getElementById("hamburger");
      boton.classList.remove("transition-hamburger-menu");
      boton.onclick = toggle_menu;

    }
  </script>
     <!-- BANNER DE INICIO DE SESIÓN (pop-up) -->
     <div class="log-in-banner-container">
 
        <div class="container hidden" id="container">
          <div class="background-overlay" id="backgroundOverlay"></div>
          <button id="closeModalButton" class="close-modal-button" aria-label="Cerrar pop-up inicio de sesión"> 
            <i class="fa-solid fa-xmark close-modal" id="closeModal" style="color: black;"></i>
          </button>
          <div class="form-container sign-up-container">
            <form class="sign-in-up-form" action="#">
              <h1 class="h1-sentence">Crear cuenta</h1>
              <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <span class="span-sentence">o regístrate de otra forma</span>
              <input class="input-sign-in-up" type="text" placeholder="Nombre" />
              <input class="input-sign-in-up" type="email" placeholder="E-mail" />
              <input class="input-sign-in-up" type="password" placeholder="Contraseña" />
              <button class="button-style sign-in-up-button">Registrarme</button>
            </form>
          </div>
          <div class="form-container sign-in-container">
            <form class="sign-in-up-form" action="#">
              <h1 class="h1-sentence">Inicia sesión</h1>
              <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
              </div>
              <span class="span-sentence">o inicia sesión de otra forma</span>
              <input class="input-sign-in-up" type="email" placeholder="Email" />
              <input class="input-sign-in-up" type="password" placeholder="Password" />
              <a class="a-password" href="#">¿Olvidaste tu contraseña?</a>
              <button class="button-style sign-in-up-button">Iniciar sesión</button>
            </form>
          </div>
          <div class="overlay-container">
            <div class="overlay">
              <div class="overlay-panel overlay-left">
                <h1 class="h1-sentence">¡Hola de nuevo!</h1>
                <p class="p-sentence">Pulse aquí para iniciar sesión</p class="description">
                <button class=" button-style ghost" id="signIn">Iniciar sesión</button>
              </div>
              <div class="overlay-panel overlay-right">
                <h1 class="h1-sentence">¡Hola! ¿Primera vez por aquí?</h1>
                <p class="p-sentence">Pulse aquí para registrar tus datos y comenzar</p class="description">
                <button class=" button-style ghost" id="signUp">Registrarme</button>
              </div>
            </div>
          </div>
        </div>
      
        <script>
          var modal = document.getElementById("container");
          var btn = document.getElementById("signInUpIcon");
          var closeBtn = document.getElementById("closeModal");
          var background = document.getElementById("backgroundOverlay");
      
          btn.onclick = function(){
            modal.classList.remove("hidden");
            background.style.display="block";
          }
      
          closeBtn.onclick = function(event){
              modal.classList.add("hidden");
              background.style.display="none";
          }
      
          window.onclick = function(event){
            if(event.target == modal){
              modal.classList.add("hidden");
              background.style.display = "none";
            }
          }
        </script>
      
        <script>
            const signUpButton = document.getElementById('signUp');
          const signInButton = document.getElementById('signIn');
          const container = document.getElementById('container');
      
          signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
          });
      
          signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
          });
      
        </script>
      
      </div>



    <!--------------------------------------------------------->



    <div class="article-grid">

      <article class="article-product-card">
        <div class="article-image-container">
          <div class="badge">¡Oferta!</div>
          <div class="article-product-tumb">
            <img src="https://mario.wiki.gallery/images/thumb/f/f4/TripleBananaMK8.png/800px-TripleBananaMK8.png" alt="Trío de plátanos">
          </div>
        </div>
      </article>

      <article class="article-product-card">
        <div class="article-product-details ">
          <span class="product-category">Objetos</span>
          <h4><a href="">Trío de plátanos</a></h4>
          <p class="description">El kit ideal para hacer resbalar a tus enemigos hacia su perdición.</p>
          <div class="aticle-product-bottom-details">
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
      </article>
        
    </div>
      

    <!--------------------------------------------------------->

  
      <!-- FOOTER DE LA PÁGINA CON INFO DE CONTACTO ETC. -->
  <footer>
    <section id="contact">
      <h2 class="section-header">Contacto</h2>
          <div class="contact-wrapper">
              
            <!-- FORMULARO A LA IZQUIERDA --> 
            <form id="contact-form" class="form-horizontal">
              <input name="name" type="text" class="feedback-input" placeholder="Nombre" required title="Escribe tu nombre"/>   
              <input name="email" type="text" class="feedback-input" placeholder="E-mail" required title="Escribe tu correo electrónico"/>
              <textarea name="text" class="feedback-input" placeholder="¿Algo que quieras comentarnos?" required title="Coméntanos tu duda, queja o sugerencia aquí"></textarea>
              <input type="submit" class="feedback-input" value="ENVIAR" aria-label="Enviar"/>
            </form>
              
            <!-- PÁGINA DE CONTACTO A LA DERECHA --> 
            <div class="direct-contact-container">
              <ul class="contact-list">
                <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Reino Champiñón</span></i></li>  
                <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="¡Llámanos!">123 456 789</a></span></i></li>
                <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="¡Envíanos un correo!">bom@kingbowser.mk</a></span></i></li>               
              </ul>
          
              <hr>
                <ul class="social-media-list">
                  <li><a href="https://play.google.com/store/apps/details?id=com.nintendo.zaka&pli=1" target="_blank" class="contact-icon" title="Descarga nuestra aplicación desde Google Play">
                    <i class="fa-brands fa-google-play" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="https://mariokarttour.com/" target="_blank" class="contact-icon" title="Visita nuestra página web oficial del juego">
                    <i class="fa-solid fa-globe" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="https://twitter.com/mariokarttourEN" target="_blank" class="contact-icon" title="Síguenos en Twitter">
                    <i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
                  </li>
                  <li><a href="https://www.instagram.com/mariokarttourpage/" target="_blank" class="contact-icon" title="Síguenos en Instagram">
                    <i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
                  </li>       
                </ul>
              </hr>
            </div> 
          </div>
    </section>
  </footer>

</body>
</html>
      