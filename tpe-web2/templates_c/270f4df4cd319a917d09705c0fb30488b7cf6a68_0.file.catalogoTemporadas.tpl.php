<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 18:57:34
  from 'C:\xampp\htdocs\tpe-web2\templates\usuario\catalogoTemporadas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f872dfe849841_91711568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '270f4df4cd319a917d09705c0fb30488b7cf6a68' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\usuario\\catalogoTemporadas.tpl',
      1 => 1602628113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5f872dfe849841_91711568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
                          <th>Ver mas</th>
                         </tr>
                       </thead>
                        <tbody>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['catalogoTemp_s']->value, 'temporada');
$_smarty_tpl->tpl_vars['temporada']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['temporada']->value) {
$_smarty_tpl->tpl_vars['temporada']->do_else = false;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['temporada']->value->id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['temporada']->value->temporada;?>
</td>
                        <td> <a href="temporada/<?php echo $_smarty_tpl->tpl_vars['temporada']->value->id;?>
" >Ver Mas </a></td>
                       </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </body>
                        </table>
                </form>
                 <form action="productos" method="GET">
                <button type="submit" name="productos">Ver Productos</button>
              </form>
                  </div>
               </article>           
        <aside> </aside> 
            </section>          
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
