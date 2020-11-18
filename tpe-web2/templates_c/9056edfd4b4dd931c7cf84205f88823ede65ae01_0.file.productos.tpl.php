<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 17:47:40
  from 'C:\xampp\htdocs\tpe-web2\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f80861c3d9678_18440877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9056edfd4b4dd931c7cf84205f88823ede65ae01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\productos.tpl',
      1 => 1602257638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:insertarProducto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f80861c3d9678_18440877 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <section class="contenedorProductos">
        <article class="contenido-productos">
          <img class="imagen" src="View/images/bolsaDeDormir.jpg" alt="bolsaDeDormir">
               <form class="product_form"action="">
                    <table>
                       <thead>
                         <tr>
                           <th>Id</th>
                           <th>Producto</th>
                           <th>Precio</th>
                           <th>Marca</th>
                           <th>Temporada</th>
                           <th>Borrar</th>
                           <th>Editar</th>
                           <th>Ver mas</th>
                         </tr>
                       </thead>
                        <tbody>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos_s']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->producto;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->temporada;?>
</td>
                        <td> <a href="delete/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" >Borrar </a></td>
                        <td> <a href="edit/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" >Editar </a></td>
                        <td> <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id;?>
" >Ver Mas </a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
        </body>
                        </table>
                </form>

            <form action="filtroTemporada"  method="POST">
                <div class="filtro">
                    <select name="filtroTemporada" id=select_filter>
                      <option value="value1"selected>Filtrar por</option> 
                       <option value="1">Invierno</option>
                      <option value="2" >Verano</option>
                      <option value="3">Primavera</option>
                      <option value="4">Otoño</option> 
                    </select>
                      <button id=filter>Filtrar</button>
               </div>
            </form>

    <?php $_smarty_tpl->_subTemplateRender("file:insertarProducto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>   
     <form action="adminTemporadas" method="GET">
        <button type="submit" name="adminTemporadas">Ver temporadas</button>
        </form>
                  </div>
               </article>           
        <aside> </aside> 
            
            </section>          
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <?php }
}
