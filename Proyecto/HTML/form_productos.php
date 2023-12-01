
  <div class="form-container">
        <form action="productos.php" method="POST">
          <h1 class="h1-sentence">Añadir producto</h1>
          
          
		  <select name="category">
            <option value="">Categoría</option>
            <option value="Objetos">Objetos</option>
            <option value="Karts">Karts</option>
            <option value="Alas">Alas</option>
            </select>
          <input class="input-sign-in-up" type="text" name="product_name" placeholder="Nombre" />
          <input class="input-sign-in-up" type="text" name="description" placeholder="Descripción" />
          <input class="input-sign-in-up" type="float" name="product_price" placeholder="Precio" />
		  <input class="input-sign-in-up" type="float" name="discount" placeholder="Descuento (opcional)" />
          <input class="input-sign-in-up" type="text" name="image_src" placeholder="Ruta de imagen"/>
          <input type="submit" class="button-style sign-in-up-button"></input>
        </form>
</div>
