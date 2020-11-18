<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 17:14:14
  from 'C:\xampp\htdocs\tpe-web2\templates\insertarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f807e46773e40_98193791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b88d30e92970819724866e7e6b2d7aafbf2d527' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\insertarProducto.tpl',
      1 => 1602256416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f807e46773e40_98193791 (Smarty_Internal_Template $_smarty_tpl) {
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
                      <option value="2" >Verano</option>
                      <option value="1">Invierno</option>
                      <option value="3">Primavera</option>
                      <option value="4">Otoño</option>
                    </select>
                      
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div>


<?php }
}
