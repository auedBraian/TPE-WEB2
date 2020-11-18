<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 18:13:45
  from 'C:\xampp\htdocs\tpe-web2\templates\producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f808c39361198_07722065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fe58d00c171a0469e8d9bd90651bd14337df2d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\producto.tpl',
      1 => 1602257670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f808c39361198_07722065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto_s']->value, 'producto');
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
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->temporada_id;?>
</td>
                        </tr>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                  <form action="productos" method="GET">
                <button type="submit" name="productos">Volver a tabla de Productos</button>
              </form>
            </article>           
 <aside> </aside> 
            </section><?php }
}
