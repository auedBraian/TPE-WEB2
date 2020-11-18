{include file="./headerAdmin.tpl"}
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
                    
                    <table>
                      <thead>
                        <tr>
                           <th>Temporada</th>
                           <th>Editar</th>
                         </tr>
                     </thead>
                    <tbody>

                    {foreach from=$editTemporada_s item=temporadas}
                    <form action="editarTemporada/{$temporadas->id}" method="POST">
                    <tr>
                      <td><input type="text" name="temporada" value="{$temporadas->temporada}"></td>
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