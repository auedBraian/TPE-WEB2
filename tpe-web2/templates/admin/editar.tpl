{include file="./headerAdmin.tpl"}
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
                    
                    <table>
                      <thead>
                        <tr>
                           <th>Producto</th>
                           <th>Precio</th>
                           <th>Marca</th>
                           <th>Temporada</th>
                           <th>editar</th>

                         </tr>
                     </thead>
                    <tbody>

                    {foreach from=$edit_s item=producto}
                    <form action="editarProducto/{$producto->id}" method="POST">
                    <tr>
                      <td><input type="text" name="producto" value="{$producto->producto}"></td>
                      <td><input type="text" name="precio" value="{$producto->precio}"></td>
                      <td><input type="text" name ="marca" value="{$producto->marca}"></td>
                      <td>  <select name="temporada" > 
                                  <option value="9">Verano</option>
                                  <option value="2" >Invierno</option>
                                  <option value="3">Otoño</option>
                                  <option value="4">Primavera</option>
                            </select>
                         </td> 
                      <td><button type="submit" name="editar">editar</td>
                    </tr>
                    {/foreach}
                
                    </form>
                  </body>
                </table>
                
    </article>           
 <aside> </aside> 
            </section>
    {include file="../footer.tpl"}