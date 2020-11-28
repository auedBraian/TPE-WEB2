<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 13:52:33
  from 'C:\xampp\htdocs\web\TPE-WEB2-master\tpe-web2\templates\admin\permisosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb66a912c77e2_45020468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63a5cae2f71c8cf496375c0685acda36a91eed61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TPE-WEB2-master\\tpe-web2\\templates\\admin\\permisosAdmin.tpl',
      1 => 1605790220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./headerAdmin.tpl' => 1,
  ),
),false)) {
function content_5fb66a912c77e2_45020468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./headerAdmin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users_s']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                        <tr>
                         
                          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->password;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
</td>
                          <td> <a href="hacerAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" > Hacer Admin </a></td>
                          <td> <a href="quitarAdmin/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" >Quitar Admin </a></td>
                          <td> <a href="borrarUsuario/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" >Borrar Usuario </a></td>

                        </tr>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                  <form action="adminProductos" method="GET"><!-- revisar este form -->
                <button type="submit" name="adminProductos">Volver a Productos</button>
              </form>
            </article>           
 <aside> </aside> 
            </section><?php }
}
