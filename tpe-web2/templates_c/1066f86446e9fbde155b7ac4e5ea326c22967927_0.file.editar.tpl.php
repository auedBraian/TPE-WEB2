<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 00:42:44
  from 'C:\xampp\htdocs\tpe-web2-versionKevin\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e44641708b3_50732763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1066f86446e9fbde155b7ac4e5ea326c22967927' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2-versionKevin\\templates\\editar.tpl',
      1 => 1602106319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7e44641708b3_50732763 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
                    
                    <table>
                      <thead>
                        <tr>
                           <th>Producto</th>
                           <th>Precio</th>
                           <th>Marca</th>
                           <th>Temporada</th>
                           <th>editar</th>

                         </tr>
                     </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['edit_s']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <form action="edit/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" method="POST">
                    <tr>
                      <td><input type="text" name="producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
"></td>
                      <td><input type="text" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
"></td>
                      <td><input type="text" name ="marca" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
"></td>
                      <td><input type="text" name="temporada" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->temporada_id;?>
"></td>
                      <td><button type="submit" name="editar">editar</td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                    </form>
                  </body>
                </table>
                
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}