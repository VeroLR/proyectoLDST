<?php
    session_start(); 
    include ('header.php');
    include ('signin.php');
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
?>
  <div class="form-productos">
        <br> </br>
        <br> </br>
        <br> </br>
        <br> </br>
        <form action="usuario_add.php" method="POST">
        <div class="product-title">Añadir usuario</div>
        <br> </br>
          
          <input class="input-sign-in-up" type="text" name="name" placeholder="Nombre" />
		  <input class="input-sign-in-up" type="text" name="surnames" placeholder="Apellidos" />
          <input class="input-sign-in-up" type="email" name="email" placeholder="E-mail" />
          <input class="input-sign-in-up" type="password" name="password" placeholder="Contraseña" />
		  <input class="input-sign-in-up" type="text" name="birthdate" placeholder="Fecha de nacimiento (dd-mm-yyyy)" />
      <select name="privilege">
            <option value="">Privilegio</option>
            <option value="Administrador">Administrador</option>
            <option value="Cliente">Cliente</option>
            </select>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
</div>
