
 <!-- CONTENEDOR DE LA BARRA SUPERIOR DE LA PÁGINA -->
 <nav class="top-bar-container">
      <!-- IMAGEN DEL LOGO DE LA PÁGINA -->
      <div class="logo">
        <a href="#home">
        <img class="logo-img" src = "../../Proyecto/IMÁGENES/Logo/BOM_SOLO.svg" alt="Logo de Bowser Object Market">
        </a>
      </div>

      <!-- BUSCADOR DE CONTENIDO EN LA BARRA SUPERIOR -->
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
              </ul>
            </details>
          </li>
          <li><i class="fa-solid fa-address-card"></i><a href="#contact" title="Contacto">CONTACTO</a></li>
        </ul>
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
