<?php
    session_start();  
    include('conexBD.php');
    include ('header.php');
    include ('signin.php');
    $mensaje = isset($_GET['mensaje']) ? $_GET['mensaje'] : '';
    $email = isset($_GET['email']) ? $_GET['email'] : '';

    $query="select * from users where email = '".$email."'";
    $resultado = mysqli_query($db,$query);
    $row=mysqli_fetch_array($resultado);
?>
  <div class="form-productos">
        <br> </br>
        <br> </br>
        <br> </br>
        <br> </br>
        <form action="usuario_modif.php" method="POST">
        <div class="product-title">Modificar datos de Usuario</div>
        <br> </br>
          <input class="input-sign-in-up" type="text" value=<?php echo $row['email']; ?> name="email" placeholder="E-mail" readonly/></input>
          <?php
            $name = $row['name'];
            $nameArray = explode(' ', $name);
          ?>
          <input class="input-sign-in-up" type="text" value=<?php foreach($nameArray as $word){echo $word.'&nbsp;';}?> name="name" placeholder="Nombre" /></input>
          <?php
            $surnames = $row['surnames'];
            $surnameArray = explode(' ', $surnames);
          ?>
		      <input class="input-sign-in-up" type="text" value=<?php foreach($surnameArray as $word){echo $word.'&nbsp;';} ?> name="surnames" placeholder="Apellidos" /></input>
          <input class="input-sign-in-up" type="password" value=<?php echo $row['password']; ?> name="password" placeholder="Contraseña" /></input>
          <input class="input-sign-in-up" type="text" name="phone_number" placeholder="Número de teléfono" value=<?php if($row['phone_number']) echo $row['phone_number']; ?> ></input>
		      <?php
            if($row['address']){
            $address = $row['address'];
            $addressArray = explode(' ', $address);
            }
          ?>
          <input class="input-sign-in-up" type="text" name="address" placeholder="Dirección" value=<?php if($row['address']){foreach($addressArray as $word){echo $word.'&nbsp;';}} ?>></input>
		      <?php
            if($row['city']){
            $city = $row['city'];
            $cityArray = explode(' ', $city);
            }
          ?>
          <input class="input-sign-in-up" type="text" name="city" placeholder="Ciudad" value=<?php if($row['city']){foreach($cityArray as $word){echo $word.'&nbsp;';}} ?>></input>
		      <?php 
                $partesFecha = explode("-", $row['birthdate']);
                $fechaOrdenada= implode("-", array_reverse($partesFecha)); ?>
          <input class="input-sign-in-up" type="text" value=<?php echo $fechaOrdenada; ?> name="birthdate" placeholder="Fecha de nacimiento (dd-mm-yyyy)" /></input>

          <br> </br>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
</div>
