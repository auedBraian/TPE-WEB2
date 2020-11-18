<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 15:47:23
  from 'C:\xampp\htdocs\tpe-web2-versionKevin\templates\insertarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f186bf0fd55_56316485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a35d8d11b10539c5aa17a71fcbded9daa309334' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2-versionKevin\\templates\\insertarProducto.tpl',
      1 => 1602122276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f186bf0fd55_56316485 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="insert" method="POST">
                <label for="producto">Producto</label>
                <input type="text" name="producto" value="">
                <label for="precio">Precio</label>
                <input type="number" name="precio" value="">
                <label for="marca">Marca</label>
                <input type="text" name="marca" value= "">
                <label for="temporada_id">Temporada</label>
                 <select name="temporada_id" id=select_filter> 
                      <option value="3" >Verano</option>
                      <option value="2">Invierno</option>
                      <option value="4">Primavera</option>
                      <option value="5">Otoño</option>
                    </select>
                      
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div>
<?php }
}
