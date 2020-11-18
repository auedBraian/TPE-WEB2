<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-16 15:39:19
  from 'C:\xampp\htdocs\tpe-web2\templates\admin\insertarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb28f177560b8_67786297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a74271cd8f24c0d121738a84b05688fc30b29cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\admin\\insertarProducto.tpl',
      1 => 1605535921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb28f177560b8_67786297 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <form action="insertarProducto" method="POST">
                <label for="producto">Producto</label>
                <input type="text" name="producto" value="">
                <label for="precio">Precio</label>
                <input type="number" name="precio" value="">
                <label for="marca">Marca</label>
                <input type="text" name="marca" value= "">
                <label for="temporada_id">Temporada</label>
                 <select name="temporada_id" id=select_filter> 
                      <option value="9">Verano</option>
                      <option value="2" >Invierno</option>
                      <option value="3">Otoño</option>
                      <option value="4">Primavera</option>
                  </select>
                <button type="submit" name="agregar">Agregar</button>
        </form>
</div>


<?php }
}
