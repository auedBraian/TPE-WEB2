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
                          <input id="prodId" type="hidden" value="{$producto->id}">
                          <td>{$producto->id}</td>
                          <td>{$producto->producto}</td>
                          <td>{$producto->precio}</td>
                          <td>{$producto->marca}</td>
                          <td>{$producto->temporada}</td>
                        </tr>
                   {/foreach}
                    </table>

              <form class="product_form" action="">
              <table>
              <thead>
              <tr>
                <th>Comentario </th>
                <th>Valoracion</th>
                <th>Usuario Email</th>
              </tr>
             </thead>
            <tbody id="productos_tabla">

            </tbody>

          </table>
        </form>
         
                  <form action="adminProductos" method="GET">
                <button type="submit" name="adminProductos">Volver a Productos</button>
              </form>
        
        <form action="verUsuarios" method="GET">
        <button type="submit" name="verUsuarios">Ver Usuarios</button>
        </form>
                    </article>           
 <aside> </aside> 
            </section>
  {include file="./adminFooter.tpl"}