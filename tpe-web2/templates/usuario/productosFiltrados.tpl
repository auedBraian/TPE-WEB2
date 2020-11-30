{include file="../header.tpl"}
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
                           <th>Ver mas</th>
                         </tr>
                       </thead>
                        <tbody>
                   {foreach from=$productosFiltrados_s item=producto}
                    <tr>
                        <td>{$producto->id}</td>
                        <td>{$producto->producto}</td>
                        <td>{$producto->precio}</td>
                        <td>{$producto->marca}</td>
                        <td>{$producto->temporada}</td>
                        <td><a href="producto/{$producto->id}">Ver Mas</a></td>
                    </tr>
                {/foreach}
                
        </body>
                        </table>
                </form>

            <form action="filtroTemporada"  method="POST">
                <div class="filtro">
                    <select name="filtroTemporada" id=select_filter>
                      <option value="value1"selected>Filtrar por</option> 
                       <option value="2">Invierno</option>
                      <option value="9" >Verano</option>
                      <option value="4">Primavera</option>
                      <option value="3">Otoño</option> 
                    </select>
                      <button id=filter>Filtrar</button>
               </div>
            </form>
              </div>
         <form action="productos" method="GET">
                <button type="submit" name="productos">Ver Productos</button>
              </form>
               </article>           
        <aside> </aside> 
            
            </section>          
{include file="../footer.tpl"}
