<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-26 19:25:20
  from 'C:\xampp\htdocs\tpe-web2\templates\usuarioNoRegistrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fbff3105c1b14_50456992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6eb2c50471acbca5a3e9db924b2472c29d983de4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\usuarioNoRegistrado.tpl',
      1 => 1606415116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5fbff3105c1b14_50456992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <section class="contenedorProductos">
            <article class="contenido-productos">
                    <table>
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Producto</th>
                          <th>Precio</th>
                          <th>Marca</th>
                          <th>Temporada</th>
                        </tr>
                      </thead>
                    <tbody>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto_s']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                        <tr>
                        <input id="productoId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->temporada_id;?>
</td>
                        </tr>
                   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                  <form action="productos" method="GET">
                <button type="submit" name="productos">Volver a tabla de Productos</button>
              </form>
            <form class="product_form" action="">
          <table>
            <thead>
              <tr>
                <th>Comentario </th>
                <th>Puntaje</th>
                <th>Usuario id</th>
              </tr>
             </thead>
            <tbody id="productos_tabla">

            </tbody>

          </table>
          </form>
            <h1 style="display:none">Insertar Comentario</h1>
         <form style="display:none" action="comentarios" method="POST">
             <textarea id="comentario" type="text" name="comentario" maxlength="255">Escribe aquí tus comentarios</textarea>
               <select name="valoracion" id="valoracion"> 
                      <option value="1">1</option>
                      <option value="2" >2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                  </select>
                <button type="submit" name="agregar" id="btnInsertarComentario">InsertarComentario</button>
        </form>

            </article>           
 <aside> </aside> 
               
            </section> 
            <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
