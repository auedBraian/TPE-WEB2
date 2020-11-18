<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-16 14:56:00
  from 'C:\xampp\htdocs\tpe-web2\templates\admin\insertarTemporada.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb284f0b33c36_04235830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbdc373d257963246cb963a79a4dd7867237a537' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\admin\\insertarTemporada.tpl',
      1 => 1605534538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb284f0b33c36_04235830 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="insertarTemporada" method="POST">
                <label for="temporada">Temporada</label>
                <input type="text" name="temporada" value="">
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div><?php }
}
