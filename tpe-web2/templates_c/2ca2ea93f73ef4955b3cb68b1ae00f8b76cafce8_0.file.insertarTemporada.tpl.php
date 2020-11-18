<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 17:22:37
  from 'C:\xampp\htdocs\tpe-web2-versionKevin\templates\insertarTemporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f2ebd962926_92908214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ca2ea93f73ef4955b3cb68b1ae00f8b76cafce8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2-versionKevin\\templates\\insertarTemporada.tpl',
      1 => 1602077791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f2ebd962926_92908214 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="insertTemporada" method="POST">
                <label for="temporada">Temporada</label>
                <input type="text" name="temporada" value="">
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div><?php }
}
