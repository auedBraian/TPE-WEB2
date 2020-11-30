<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 00:47:23
  from 'C:\xampp\htdocs\tpe-web2\templates\usuario\catalogo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc2e18b7b9299_19146897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e44f28673edd4597d107825c97eb9b52eba98174' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\usuario\\catalogo.tpl',
      1 => 1606596842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./headerUsuario.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5fc2e18b7b9299_19146897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./headerUsuario.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <section class="contenedorProductos">
        <article class="contenido-productos">
          <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
               <form class="product_form" action="">
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
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogo_s']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->temporada;?>
</td>
                        <td> <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">Ver Mas </a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </body>
                        </table>
                </form>
            <form action="filtroTemporada"  method="POST">
                <div class="filtro">
                    <select name="filtroTemporada" id=select_filter>
                      <option value="value1"selected>Filtrar por</option> 
                       <option value="9" >Verano</option>
                       <option value="2">Invierno</option>
                      <option value="3">Otoño</option>
                      <option value="4">Primavera</option>
                    </select>
                      <button id=filter>Filtrar</button>
               </div>
            </form>
                 <form action="temporadas" method="GET">
        <button type="submit" name="temporadas">Ver temporadas</button>
        </form>
                  </div>
               </article>           
        <aside> </aside> 
            </section>          
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>                      <?php }
}
