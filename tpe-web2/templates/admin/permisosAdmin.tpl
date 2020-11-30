{include file="./headerAdmin.tpl"}
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <table>
                      <thead>
                        <tr>
                          <th>Email</th>
                          <th>Password(CONSULTAR)</th>
                          <th>Rol</th>
                          <th>Hacer Administrador</th>
                          <th>Quitar Administrador</th>
                          <th>Eliminar Usuario</th>
                        </tr>
                      </thead>
                    <tbody>
                   {foreach from=$users_s item=user}
                        <tr>
                          <td>{$user->email}</td>
                          <td>{$user->password}</td>
                          <td>{$user->rol}</td>
                          <td> <a href="hacerAdmin/{$user->id}" > Hacer Admin </a></td>
                          <td> <a href="quitarAdmin/{$user->id}" >Quitar Admin </a></td>
                          <td> <a href="borrarUsuario/{$user->id}" >Borrar Usuario </a></td>
                        </tr>
                   {/foreach}
                    </table>
                  <form action="adminProductos" method="GET">
                <button type="submit" name="adminProductos">Volver a Productos</button>
              </form>
                 <form action="adminTemporadas" method="GET">
        <button type="submit" name="adminTemporadas">Volver a tabla de Temporadas</button>
        </form>
            </article>           
 <aside> </aside> 
            </section>