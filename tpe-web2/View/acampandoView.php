<?php
require_once "./libs/smarty/Smarty.class.php";

class AcampandoView{

    private $title;
    
    function __construct(){
        $this->title = "Inicio";
    }

    function ShowHome(){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->display('../templates/usuario/inicio.tpl'); // muestro el template 
    }


    function ShowHomeLogueado(){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->display('../templates/usuario/inicioLogueado.tpl'); // muestro el template 
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function ShowProductos($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('productos_s', $productos);
        $smarty->display('../templates/admin/productos.tpl'); // muestro el template 
    }

    function ShowCatalogo($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('catalogo_s', $productos);
        $smarty->display('../templates/usuario/catalogo.tpl'); // muestro el template 
    }

    function ShowCatalogoNoUsuario($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('catalogo_s', $productos);
        $smarty->display('../templates/usuario/catalogoNoUsuario.tpl'); // muestro el template
    }

    function ShowProductoUnico($id){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('producto_s', $id);
        $smarty->display('../templates/usuario/producto.tpl'); // muestro el template 

    }

    function ShowProductoUnicoNoLogueado($producto){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('producto_s', $producto);
        $smarty->display('../templates/usuarioNoRegistrado.tpl'); // muestro el template 
    }

    function ShowProductoAdm($id){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('productoAdmin_s', $id);
        $smarty->display('../templates/admin/productoAdmin.tpl'); // muestro el template 

    }

    function editarProducto($id){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('edit_s', $id);
        $smarty->display('../templates/admin/editar.tpl'); // muestro el template 
    }

    function ShowProductosFiltrados($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('productosFiltrados_s', $productos);
        $smarty->display('../templates/usuario/productosFiltrados.tpl'); // muestro el template 
    }

    function ShowProductosFiltradosAdmin($productos){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('productosFiltradosAdmin_s', $productos);
        $smarty->display('../templates/admin/productosFiltradosAdmin.tpl'); // muestro el template 
    }
}

?>