<?php
  $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';

  $mensaje_bienvenida = '';

  if ($mensaje === 'bienvenido') {
    $mensaje_bienvenida = "¡It's-a-me, " . $_SESSION['name'] . "!";
  }
  $privilege = isset($_GET['privilege']) ? $_GET['privilege'] : '';
?>

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
 <!-- CONTENEDOR DE LA BARRA SUPERIOR DE LA PÁGINA -->
 <nav class="top-bar-container">
      <!-- IMAGEN DEL LOGO DE LA PÁGINA -->
      <div class="logo">
        <a href="#home">
        <img class="logo-img" src = "../../Proyecto/IMAGENES/Logo/BOM_SOLO.svg" alt="Logo de Bowser Object Market">
        </a>
      </div>

      <!-- BUSCADOR DE CONTENIDO EN LA BARRA SUPERIOR -->
      <div class="search">
        <form class="search-bar" action="buscador.php" method="post">
          <input type="text" required class="input-search" placeholder="Buscar..." id="searchInput" name="busqueda" aria-label="Busca cualquier producto">
          <label for="searchInput" class="search-button"><i class="fa fa-search"></i></label>
        </form>
      </div>

      <!-- ICONO INICIO DE SESIÓN -->
      <?php
      if ($mensaje !== 'bienvenido') {
      echo'<div class="sign-in-up-div">
        <div class="tooltip-container">
          <span class="tooltip-text">Iniciar sesión/Registrarse</span>
          <i class="fa-solid fa-user" id="signInUpIcon"></i>
        </div>
      </div>';
      }
      if ($mensaje == 'bienvenido') {
        echo'<div class="sign-in-up-div">
          <div class="tooltip-container">
            <span class="tooltip-text">Cerrar sesión</span>
            <i class="fa-solid fa-right-from-bracket" id="signOutIcon"></i>
            </div>
        </div>
        <script>
        var btn = document.getElementById("signOutIcon");
        btn.onclick = function(){
          window.location.href = "logout.php";
        }
        </script>';
      }
      ?>



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
          <li><i class="fa-solid fa-house"></i><a href="#home" title="Inicio">INICIO</a></li>
          <li><i class="fa-solid fa-book-open"></i><a href="#catalogue" title="Catálogo">CATÁLOGO</a>
            <details class="dropdown">
              <summary class="fa-solid fa-chevron-right" style="color: #363537;">
                <a></a>
              </summary>
              <ul>
                <li><a href="#objects">Objetos</a></li>
                <li><a href="#karts">Karts</a></li>
                <li><a href="#wings">Alas</a></li>
                <?php 
                  if($privilege==1){
                    echo'<li><a href="form_productos.php">Añadir producto</a></li>';
                  }
                ?>
              </ul>
            </details>
          <li><i class="fa-solid fa-address-card"></i><a href="#contact" title="Contacto">CONTACTO</a></li>
          <li><br></br></li>
          <li><br></br></li>
          <li><br></br></li>
          <li><br></br></li>
          <li><br></br></li>

        </ul>
        <?php include('calendario.php'); ?>
      </div>
    </nav>
  
  <!-- SCRIPT DE APERTURA Y CIERRE DEL MENÚ LATERAL DERECHO -->
  <script>
    function toggle_menu() { /* Apertura del menú lateral */
      document.getElementById("menuItems").style.right = 0; /* Utilizamos el id del elemento para darle un estilo inicial */
      var boton = document.getElementById("hamburger"); /* Creamos una variable denominada botón y la asociamos al elemento hamburger */
      boton.classList.add("transition-hamburger-menu"); /* Hacemos que al ejecutarse la función toggle_menu se añada una clase que realiza una transición a la X */
      boton.onclick = close_menu; /* En el momento en el que se haga clic sobre el botón se cambia la función asociada a este para que la siguiente vez que se clique se cierre el menú */
    }
    function close_menu() { /* Cierre dell menú lateral */
      document.getElementById("menuItems").style.right = "-60%"; /* Asignamos un estilo para que se esconda el menú */
      var boton = document.getElementById("hamburger");
      boton.classList.remove("transition-hamburger-menu"); /* Eliminamos la clase que hace que aparezca la transición a una X  */
      boton.onclick = toggle_menu; /* Hacemos que el botón vuelva a tener la función de apertura del menú asociada para la próxima vez que se use */

    }
  </script>
