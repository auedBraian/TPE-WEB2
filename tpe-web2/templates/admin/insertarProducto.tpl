<div class="container">
    <form action="insertarProducto" method="POST">
                <label for="producto">Producto</label>
                <input type="text" name="producto" value="">
                <label for="precio">Precio</label>
                <input type="number" name="precio" value="">
                <label for="marca">Marca</label>
                <input type="text" name="marca" value= "">
                <label for="temporada_id">Temporada</label>
                 <select name="temporada_id" id=select_filter> 
                      <option value="9">Verano</option>
                      <option value="2" >Invierno</option>
                      <option value="3">Otoño</option>
                      <option value="4">Primavera</option>
                  </select>
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div>


