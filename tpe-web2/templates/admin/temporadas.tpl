{include file="./headerAdmin.tpl"}
 <section class="contenedorProductos">
        <article class="contenido-productos">
          <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
               <form class="product_form"action="">
                    <table>
                       <thead>
                         <tr>
                           <th>Id</th> 
                           <th>Temporada</th>
                           <th>Borrar</th>
                           <th>Editar</th>
                           <th>Ver mas</th>
                         </tr>
                       </thead>
                        <tbody>
                   {foreach from=$temporadas_s item=temporada}
                    <tr>
                        <td>{$temporada->id}</td>
                        <td>{$temporada->temporada}</td>
                        <td> <a href="borrarTemporada/{$temporada->id}" >Borrar </a></td>
                        <td> <a href="editarTemporada/{$temporada->id}" >Editar </a></td>
                        <td> <a href="temporadaAdmin/{$temporada->id}" >Ver Mas </a></td>
                    </tr>
                {/foreach}
        
                        </table>
                </form>
    {include file="./insertarTemporada.tpl"} 
              <form action="adminProductos" method="GET">
                <button type="submit" name="adminProductos">Ver Productos</button>
              </form>
                <form action="verUsuarios" method="GET">
        <button type="submit" name="verUsuarios">Ver Usuarios</button>
        </form>
                  </div>
               </article>           
        <aside> </aside> 
            </section>         
            </body> 
    {include file="../footer.tpl"}