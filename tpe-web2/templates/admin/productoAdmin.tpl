{include file="./headerAdmin.tpl"}
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
                   {foreach from=$productoAdmin_s item=producto}
                        <tr>
                          <td>{$producto->id}</td>
                          <td>{$producto->producto}</td>
                          <td>{$producto->precio}</td>
                          <td>{$producto->marca}</td>
                          <td>{$producto->temporada_id}</td>
                        </tr>
                   {/foreach}
                    </table>
                  <form action="adminProductos" method="GET">
                <button type="submit" name="adminProductos">Volver a Productos</button>
              </form>
            </article>           
 <aside> </aside> 
            </section>