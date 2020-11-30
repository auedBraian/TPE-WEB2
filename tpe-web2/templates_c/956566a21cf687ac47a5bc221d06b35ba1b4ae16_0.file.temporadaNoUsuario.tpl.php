<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 00:51:07
  from 'C:\xampp\htdocs\tpe-web2\templates\usuario\temporadaNoUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc2e26b3e3ee4_57145276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956566a21cf687ac47a5bc221d06b35ba1b4ae16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\usuario\\temporadaNoUsuario.tpl',
      1 => 1606597491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5fc2e26b3e3ee4_57145276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
            </section>
            <?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
