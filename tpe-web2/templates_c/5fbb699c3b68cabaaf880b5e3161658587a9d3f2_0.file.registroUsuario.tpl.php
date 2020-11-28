<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 13:15:45
  from 'C:\xampp\htdocs\web\TPE-WEB2-master\tpe-web2\templates\usuario\registroUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb661f1a51919_63907320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fbb699c3b68cabaaf880b5e3161658587a9d3f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TPE-WEB2-master\\tpe-web2\\templates\\usuario\\registroUsuario.tpl',
      1 => 1605712703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5fb661f1a51919_63907320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="contenedorProductos">
        <article class="contenido-productos">
                <form class="formularioRegistro" action="registrarUser" method="POST">
                        <label class="formlabel" for="new_user">User Name</label>
                        <input class="formlabel" type="text" name="new_user" value="">
                        <label class="formlabel" for="new_pass">Password</label>
                        <input class="formlabel" type="password" name="new_pass" value="">
                        <button type="submit" name="agregar">Sign In</button>
                </form>
         <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </article>           
           <aside></aside>
</section>         
    <?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
