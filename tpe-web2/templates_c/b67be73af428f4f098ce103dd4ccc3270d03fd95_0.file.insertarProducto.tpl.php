<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 03:52:56
  from 'C:\xampp\htdocs\web\tpe-web2-versionKevin\templates\insertarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7e70f81722a3_53688106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b67be73af428f4f098ce103dd4ccc3270d03fd95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe-web2-versionKevin\\templates\\insertarProducto.tpl',
      1 => 1602121970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7e70f81722a3_53688106 (Smarty_Internal_Template $_smarty_tpl) {
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
