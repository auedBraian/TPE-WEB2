<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 18:16:23
  from 'C:\xampp\htdocs\tpe-web2\templates\temporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f808cd7914670_29979497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8da218e9fc65528136d8affc127e5fecd849e85b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\temporada.tpl',
      1 => 1602260099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f808cd7914670_29979497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['temporada_s']->value, 'temporada');
$_smarty_tpl->tpl_vars['temporada']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['temporada']->value) {
$_smarty_tpl->tpl_vars['temporada']->do_else = false;
?>
                        <tr>
                          <td><?php echo $_smarty_tpl->tpl_vars['temporada']->value->id;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['temporada']->value->temporada;?>
</td>
                        </tr>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                     <form action="temporadas" method="GET">
                <button type="submit" name="temporadas">Volver a tabla de Temporadas</button>
              </form>
            </article>    
                      
 <aside> </aside> 
            </section><?php }
}
