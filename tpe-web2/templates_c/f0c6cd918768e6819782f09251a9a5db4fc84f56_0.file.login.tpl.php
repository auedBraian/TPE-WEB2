<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 00:17:10
  from 'C:\xampp\htdocs\tpe-web2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f8fe65da987_51860077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c6cd918768e6819782f09251a9a5db4fc84f56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\login.tpl',
      1 => 1602085433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f8fe65da987_51860077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="contenedorProductos">
        <article class="contenido-productos">
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <form class="formularioLogin" action="verificarUser" method="POST">
                        <label class="formlabel" for="user">User Name</label>
                        <input class="formlabel" type="text" name="input_user" value="">
                        <label class="formlabel" for="password">Password</label>
                        <input class="formlabel" type="password" name="input_pass" value="">
                        <button type="submit" name="agregar">Log In</button>
                </form>
        </article>           
           <aside> </aside>
</section>         
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}