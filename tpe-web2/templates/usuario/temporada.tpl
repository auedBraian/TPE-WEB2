{include file="../header.tpl"}
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <table>
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Temporada</th>
                        </tr>
                      </thead>
                    <tbody>
                   {foreach from=$temporada_s item=temporada}
                        <tr>
                          <td>{$temporada->id}</td>
                          <td>{$temporada->temporada}</td>
                        </tr>
                   {/foreach}
                    </table>
                     <form action="temporadas" method="GET">
                <button type="submit" name="temporadas">Volver a tabla de Temporadas</button>
              </form>
            </article>    
                      
 <aside> </aside> 
            </section>