{include file="./headerAdmin.tpl"}
 <section class="contenedorProductos">
        <article class="contenido-productos">
          <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
               <form class="product_form"action="">
                    <table>
                       <thead>
                         <tr>
                           <th>Id</th>
                           <th>Producto</th>
                           <th>Precio</th>
                           <th>Marca</th>
                           <th>Temporada</th>
                           <th>Borrar</th>
                           <th>Editar</th>
                           <th>Ver mas</th>
                         </tr>
                       </thead>
                        <tbody>
                   {foreach from=$productos_s item=producto}
                    <tr>
                        <td>{$producto->id}</td>
                        <td>{$producto->producto}</td>
                        <td>{$producto->precio}</td>
                        <td>{$producto->marca}</td>
                        <td>{$producto->temporada}</td>
                        <td> <a href="eliminarProducto/{$producto->id}" >Borrar </a></td>
                        <td> <a href="editarProducto/{$producto->id}" >Editar </a></td>
                        <td> <a href="productoAdmin/{$producto->id}" >Ver Mas </a></td>
                    </tr>
                {/foreach}
                
        </body>
                        </table>
                </form>

            <form action="filtroTemporadaAdmin"  method="POST">
                <div class="filtro">
                    <select name="filtroTemporadaAdmin" id=select_filter>
                      <option value="value1"selected>Filtrar por</option> 
                      <option value="9" >Verano</option>
                       <option value="2">Invierno</option>
                      <option value="3">Otoño</option>
                      <option value="4">Primavera</option>
                    </select>
                      <button id=filter>Filtrar</button>
               </div>
            </form>

    {include file="./insertarProducto.tpl"}   
     <form action="adminTemporadas" method="GET">
        <button type="submit" name="adminTemporadas">Ver temporadas</button>
        </form>
                  </div>
               </article>           
        <aside> </aside> 
            
            </section>          
    {include file="../footer.tpl"}

  