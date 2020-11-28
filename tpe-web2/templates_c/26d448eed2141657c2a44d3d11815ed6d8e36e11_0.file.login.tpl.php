<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 13:15:43
  from 'C:\xampp\htdocs\web\TPE-WEB2-master\tpe-web2\templates\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb661ef63ada8_40022578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d448eed2141657c2a44d3d11815ed6d8e36e11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TPE-WEB2-master\\tpe-web2\\templates\\admin\\login.tpl',
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
function content_5fb661ef63ada8_40022578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                <form class="formularioRegistro" action="registrarUser" method="GET">
                        <button type="submit" name="registrar">Sign In</button>
                 </form>
        </article>           
           <aside> </aside>
</section>         
    <?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
