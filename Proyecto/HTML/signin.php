<!-- BANNER DE INICIO DE SESIÓN (pop-up) -->
<div class="log-in-banner-container">
    <div class="container hidden" id="container">
      <div class="background-overlay" id="backgroundOverlay"></div>
      <button id="closeModalButton" class="close-modal-button" aria-label="Cerrar pop-up inicio de sesión"> 
        <i class="fa-solid fa-xmark close-modal" id="closeModal" style="color: black;"></i>
      </button>

      <div class="form-container sign-up-container">
        <form class="sign-in-up-form" action="registro.php" method="POST">
          <h1 class="h1-sentence">Crear cuenta</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span class="span-sentence">o regístrate de otra forma</span>
          <input class="input-sign-in-up" type="text" name="name" placeholder="Nombre" />
		   <input class="input-sign-in-up" type="text" name="surnames" placeholder="Apellidos" />
          <input class="input-sign-in-up" type="email" name="email" placeholder="E-mail" />
          <input class="input-sign-in-up" type="password" name="password" placeholder="Contraseña" />
		  <input class="input-sign-in-up" type="text" name="birthdate" placeholder="Fecha de nacimiento (dd-mm-yyyy)" />
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
      </div>

      <div class="form-container sign-in-container">
        <form class="sign-in-up-form" action="inicio_sesion.php" method="POST">
          <h1 class="h1-sentence">Inicia sesión</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span class="span-sentence">o inicia sesión de otra forma</span>
          <input class="input-sign-in-up" type="email" name="email" placeholder="Email" />
          <input class="input-sign-in-up" type="password" name="password" placeholder="Contraseña" />
          <a class="a-password" href="#">¿Olvidaste tu contraseña?</a>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1 class="h1-sentence">¡Hola de nuevo!</h1>
            <p class="p-sentence">Pulse aquí para iniciar sesión</p>
            <button class=" button-style ghost" id="signIn">Iniciar sesión</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1 class="h1-sentence">¡Hola! ¿Primera vez por aquí?</h1>
            <p class="p-sentence">Pulse aquí para registrar tus datos y comenzar</p>
            <button class=" button-style ghost" id="signUp">Registrarme</button>
          </div>
        </div>
      </div>
      
  </div>

  <!-- JAVASCRIPT PARA ABRIR EL POPUP DE REGISTRO/INICIO DE SESIÓN  -->
  <script>
    var modal = document.getElementById("container"); /* Creamos una variable que referencie al contenedor del popup */
    var btn = document.getElementById("signInUpIcon"); /* Creamos una variable que sea el botón para abrir el popup */
    var closeBtn = document.getElementById("closeModal"); /* Creamos una variable botón para cerrar el popup  */
    var background = document.getElementById("backgroundOverlay"); /* Queremos que cuando salte el popup el fondo de la página se vea más oscuro */

    btn.onclick = function(){ /* Función asociada a la aparición del popup en pantalla */
      modal.classList.remove("hidden"); /* Al hacer click se elimina  el estilo hidden del contenedor del popup */
      background.style.display="block"; /* Aparece en pantalla */
    }

    closeBtn.onclick = function(event){ /* Función asociada al cierre del popup */
        modal.classList.add("hidden"); /* Añadimos de nuevo el estilo hidden para que se oculte en pantalla */
        background.style.display="none";
    }

    window.onclick = function(event){ /* En principio esto debería hacer que al pinchar en cualquier otro lado de la pantalla se cierre también, pero no funciona */
      if(event.target == modal){
        modal.classList.add("hidden");
        background.style.display = "none";
      }
    }
  </script>

  <!-- JAVASCRIPT PARA LA ANIMACIÓN DEL POPUP DE REGISTRO/INICIO DE SESIÓN -->
  <script>

    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    /* Este código a continuación escucha eventos de click en los elementos con id="signUp" */
    signUpButton.addEventListener('click', () => {
      container.classList.add("right-panel-active"); /* Al hacer click en el botón con id=signUp se añade "right-panel-active" */
    });

    signInButton.addEventListener('click', () => {
      container.classList.remove("right-panel-active"); /* Al hacer click en el botón con id=signUp se elimina "right-panel-active" */
    });

  </script>