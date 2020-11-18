<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 16:52:35
  from 'C:\xampp\htdocs\web\tpe-web2-versionKevin\templates\temporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7dd6339300e5_70068498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae101cd080b8967820641dad5046d57dff9dee91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe-web2-versionKevin\\templates\\temporada.tpl',
      1 => 1602082247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5f7dd6339300e5_70068498 (Smarty_Internal_Template $_smarty_tpl) {
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
            </article>           
 <aside> </aside> <!-- agregue este para ver, si no anda lo borro -->
            <!--  <div class="aside-productos"> </div> -->
            </section><?php }
}
