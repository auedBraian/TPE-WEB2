{include file="../header.tpl"}
 <section class="contenedorProductos">
        <article class="contenido-productos">
          <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
               <form class="product_form"action="">
                    <table>
                       <thead>
                         <tr>
                           <th>Id</th> 
                           <th>Temporada</th>
                          <th>Ver mas</th>
                         </tr>
                       </thead>
                        <tbody>
                   {foreach from=$catalogoTemp_s item=temporada}
                    <tr>
                        <td>{$temporada->id}</td>
                        <td>{$temporada->temporada}</td>
                        <td> <a href="temporada/{$temporada->id}" >Ver Mas </a></td>
                       </tr>
                {/foreach}
        </body>
                        </table>
                </form>
                 <form action="productos" method="GET">
                <button type="submit" name="productos">Ver Productos</button>
              </form>
                  </div>
               </article>           
        <aside> </aside> 
            </section>          
{include file="../footer.tpl"}