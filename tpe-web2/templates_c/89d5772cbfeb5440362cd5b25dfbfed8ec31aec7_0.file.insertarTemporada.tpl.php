<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-07 15:46:39
  from 'C:\xampp\htdocs\web\tpe-web2-versionKevin\templates\insertarTemporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7dc6bff12190_74036109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d5772cbfeb5440362cd5b25dfbfed8ec31aec7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe-web2-versionKevin\\templates\\insertarTemporada.tpl',
      1 => 1602077791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7dc6bff12190_74036109 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="insertTemporada" method="POST">
                <label for="temporada">Temporada</label>
                <input type="text" name="temporada" value="">
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div><?php }
}
