<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 00:27:51
  from 'C:\xampp\htdocs\tpe-web2\templates\temporadas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f9267baaac2_72584870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882c369281b8c5bcc22e0cf8b3e2f5f7468fdb80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\temporadas.tpl',
      1 => 1602174050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:insertarTemporada.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f7f9267baaac2_72584870 (Smarty_Internal_Template $_smarty_tpl) {
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
                           <th>Temporada</th>
                           <th>Borrar</th>
                           <th>Editar</th>
                           <th>Ver mas</th>
                         </tr>
                       </thead>
                        <tbody>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['temporadas_s']->value, 'temporada');
$_smarty_tpl->tpl_vars['temporada']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['temporada']->value) {
$_smarty_tpl->tpl_vars['temporada']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['temporada']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['temporada']->value->temporada;?>
</td>
                        <td> <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['temporada']->value->id;?>
" >Borrar </a></td>
                        <td> <a href="editar/<?php echo $_smarty_tpl->tpl_vars['temporada']->value->id;?>
" >Editar </a></td>
                        <td> <a href="temporada/<?php echo $_smarty_tpl->tpl_vars['temporada']->value->id;?>
" >Ver Mas </a></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
                        </table>
                </form>
    <?php $_smarty_tpl->_subTemplateRender("file:insertarTemporada.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
              <form action="adminProductos" method="GET">
                <button type="submit" name="adminProductos">Ver Productos</button>
              </form>
                  </div>
               </article>           
        <aside> </aside> 
            </section>         
            </body> 
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
