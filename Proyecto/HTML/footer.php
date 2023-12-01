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

            <!-- WEBMASTERS POR AJAX --> 
            <script>
              function loadXMLDoc(webmaster) {
               var xmlhttp = new XMLHttpRequest();
               xmlhttp.onreadystatechange = function() {
               if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               mostrarInfo(webmaster,xmlhttp);
               }
               };
               xmlhttp.open("GET", "webmasters.xml", true);
               xmlhttp.send();
              }
              function mostrarInfo(nombre,xml) {
               var i;
               var info;
               var xmlDoc = xml.responseXML;
               var x = xmlDoc.getElementsByTagName("webmaster");
               for(i=0; i<x.length; i++)
               {
               if(x[i].getElementsByTagName("name")[0].innerHTML == nombre){
               info = "<p> Nombre: " + nombre + "<br>" + "Rol: " +x[i].getElementsByTagName("role")[0].innerHTML + "<br>" + "Info: " +x[i].getElementsByTagName("bio")[0].innerHTML + "<br>" + "Correo: " +x[i].getElementsByTagName("email")[0].innerHTML+"</p>";
               break;
               }
               }
               document.getElementById("webmaster-details").innerHTML = info;
              }
            </script>

            <!-- APARTADO DE WEBMASTERS -->
            <div class="webmasters-header"><h3>Webmasters</h3></div>
            <div class="webmasters-section">
              <div class="webmaster-thumbnail" id="webmaster1">
                <img src="../../Proyecto/IMAGENES/Webmasters/webmaster1.png" onclick="loadXMLDoc('Floro Piraña')" alt="Webmaster 1">
              </div>
              <div class="webmaster-thumbnail" id="webmaster2">
                <img src="../../Proyecto/IMAGENES/Webmasters/webmaster2.png" onclick="loadXMLDoc('Kamek')" alt="Webmaster 2">
              </div>
              <div class="webmaster-thumbnail" id="webmaster3">
                <img src="../../Proyecto/IMAGENES/Webmasters/webmaster3.png" onclick="loadXMLDoc('Rey Boo')" alt="Webmaster 3">
              </div>
              <div class="webmaster-details" id="webmaster-details">
				Pulsa en el icono de un webmaster para ver más información.
              </div>
            </div>
          </div>
    </section>
  </footer>