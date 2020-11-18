<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 00:27:51
  from 'C:\xampp\htdocs\tpe-web2\templates\insertarTemporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f9267bcf1f5_25640447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c56fc603b40486568499ab0094c3ae3da8ebe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\insertarTemporada.tpl',
      1 => 1602077791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f9267bcf1f5_25640447 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="insertTemporada" method="POST">
                <label for="temporada">Temporada</label>
                <input type="text" name="temporada" value="">
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div><?php }
}
