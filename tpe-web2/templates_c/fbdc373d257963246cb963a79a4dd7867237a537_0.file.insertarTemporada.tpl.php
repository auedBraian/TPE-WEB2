<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 16:03:01
  from 'C:\xampp\htdocs\tpe-web2\templates\admin\insertarTemporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc509a570cf43_05129896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbdc373d257963246cb963a79a4dd7867237a537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\admin\\insertarTemporada.tpl',
      1 => 1606596842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc509a570cf43_05129896 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="insertarTemporada" method="POST">
                <label for="temporada">Temporada</label>
                <input type="text" name="temporada" value="">
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div><?php }
}
