<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-16 14:57:39
  from 'C:\xampp\htdocs\tpe-web2\templates\admin\editarTemporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb28553d543c9_21663743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd72d2ba059530a18ba287fd1edc6508573de94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\admin\\editarTemporada.tpl',
      1 => 1605535035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./headerAdmin.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5fb28553d543c9_21663743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
                    
                    <table>
                      <thead>
                        <tr>
                           <th>Temporada</th>
                           <th>Editar</th>
                         </tr>
                     </thead>
                    <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['editTemporada_s']->value, 'temporadas');
$_smarty_tpl->tpl_vars['temporadas']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['temporadas']->value) {
$_smarty_tpl->tpl_vars['temporadas']->do_else = false;
?>
                    <form action="editarTemporada/<?php echo $_smarty_tpl->tpl_vars['temporadas']->value->id;?>
" method="POST">
                    <tr>
                      <td><input type="text" name="temporada" value="<?php echo $_smarty_tpl->tpl_vars['temporadas']->value->temporada;?>
"></td>
                      <td><button type="submit" name="editar">editar</td>
                    </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                    </form>
                  </body>
                </table>
     </article>           
 <aside> </aside> 
            </section>
    <?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
