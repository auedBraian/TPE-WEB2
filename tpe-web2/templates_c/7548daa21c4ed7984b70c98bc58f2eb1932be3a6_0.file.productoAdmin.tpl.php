<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 14:00:26
  from 'C:\xampp\htdocs\tpe-web2\templates\admin\productoAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbfa6ea5debe0_82118808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7548daa21c4ed7984b70c98bc58f2eb1932be3a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\admin\\productoAdmin.tpl',
      1 => 1606395560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./headerAdmin.tpl' => 1,
    'file:./adminFooter.tpl' => 1,
  ),
),false)) {
function content_5fbfa6ea5debe0_82118808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productoAdmin_s']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                        <tr>
                          <input id="prodId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->temporada_id;?>
</td>
                        </tr>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>

              <form class="product_form" action="">
              <table>
              <thead>
              <tr>
                <th>Comentario </th>
                <th>Puntaje</th>
                <th>Usuario id</th>
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
  <?php $_smarty_tpl->_subTemplateRender("file:./adminFooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
