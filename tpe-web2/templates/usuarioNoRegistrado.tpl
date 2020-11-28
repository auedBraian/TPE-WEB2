{include file="header.tpl"}
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <table>
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Producto</th>
                          <th>Precio</th>
                          <th>Marca</th>
                          <th>Temporada</th>
                        </tr>
                      </thead>
                    <tbody>
                   {foreach from=$producto_s item=producto}
                        <tr>
                        <input id="productoId" type="hidden" value="{$producto->id}">
                        <td>{$producto->id}</td>
                          <td>{$producto->producto}</td>
                          <td>{$producto->precio}</td>
                          <td>{$producto->marca}</td>
                          <td>{$producto->temporada_id}</td>
                        </tr>
                   {/foreach}
                    </table>
                  <form action="productos" method="GET">
                <button type="submit" name="productos">Volver a tabla de Productos</button>
              </form>
            <form class="product_form" action="">
          <table>
            <thead>
              <tr>
                <th>Comentario </th>
                <th>Puntaje</th>
                <th>Usuario id</th>
              </tr>
             </thead>
            <tbody id="productos_tabla">

            </tbody>

          </table>
          </form>
            <h1 style="display:none">Insertar Comentario</h1>
         <form style="display:none" action="comentarios" method="POST">
             <textarea id="comentario" type="text" name="comentario" maxlength="255">Escribe aquí tus comentarios</textarea>
               <select name="valoracion" id="valoracion"> 
                      <option value="1">1</option>
                      <option value="2" >2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                  </select>
                <button type="submit" name="agregar" id="btnInsertarComentario">InsertarComentario</button>
        </form>

            </article>           
 <aside> </aside> 
               
            </section> 
            {include file="footer.tpl"}