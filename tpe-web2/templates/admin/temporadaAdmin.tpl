{include file="./headerAdmin.tpl"}
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
                   {foreach from=$temporadaAdm_s item=temporada}
                        <tr>
                          <td>{$temporada->id}</td>
                          <td>{$temporada->temporada}</td>
                        </tr>
                   {/foreach}
                    </table>
        <form action="adminTemporadas" method="GET">
        <button type="submit" name="adminTemporadas">Volver a tabla de Temporadas</button>
        </form>
            </article>    
        <aside> </aside> 
            </section>