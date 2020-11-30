<?php

require_once "./View/acampandoView.php";
require_once "./Model/productosModel.php";
require_once "./Controller/userController.php";

class ProductosController{

    private $view;
    private $model;
    private $controller;

    function __construct(){
        $this->view = new AcampandoView();
        $this->model = new AcampandoModel();
        $this->controller = new userController();
    }

    //El usuario admin ve la tabla productos con la funcionalidad de editar, eliminar, etc.
     function ShowTablaProductos(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $productos = $this->model->getInventario();
            $this->view->ShowProductos($productos);
        }else{
            header("Location: ".BASE_URL."Home");        }
     }

    //El usuario no registrado ve la tabla productos pero no puede editar ni nada
    function ShowCatalogo(){
        $productos = $this->model->getInventario(); 
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==0){ 
            $this->view->ShowCatalogo($productos);
        }else{
            $this->view->ShowCatalogoNoUsuario($productos);
        }
    }

    public function insertarProducto(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
                $producto= $_POST['producto'];
                $precio = $_POST['precio'];
                $marca = $_POST['marca'];
                $temporada = $_POST['temporada_id'];
                $this->model->insertarProducto($producto, $precio, $marca, $temporada);
                $productos = $this->model->getInventario();
                $this->view->ShowProductos($productos);
        }else{
            header("Location: ".BASE_URL."Home");       }
    }

    public function eliminarProducto($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $this->model->deleteProducto($id);
            $productos = $this->model->getInventario();
            $this->view->ShowProductos($productos);
        }else{
            header("Location: ".BASE_URL."Home");        }
    }

   
    //acomodar el else y el if
    function ShowProducto($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==0){
             $id = $parametros[':ID'];
             $productos = $this->model->getProducto($id);
             $this->view->ShowProductoUnico($productos); 
        }else{
             //El usuario no registrado ve el producto pero no puede editar ni nada
             $id = $parametros[':ID'];
             $productos = $this->model->getProducto($id);
             $this->view->ShowProductoUnicoNoLogueado($productos); 
        }
    }

    function ShowProductoAdmin($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $productos = $this->model->getProducto($id);
            $this->view->ShowProductoAdm($productos);
            //mostrar los comentarios, con la opcion de eliminarlos
        }else{
            header("Location: ".BASE_URL."Home");        }
    }

    function ActualizarProducto($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $productos = $this->model->getProducto($id);
            $this->view->editarProducto($productos);
        }else{
            header("Location: ".BASE_URL."Home");        }
    }

    public function editarProducto($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $producto= $_POST['producto'];
            $precio = $_POST['precio'];
            $marca = $_POST['marca'];
            $temporada = $_POST['temporada'];
            $this->model->editarProducto($id,$producto,$precio,$marca,$temporada);
            $productos = $this->model->getInventario();
            $this->view->ShowProductos($productos);
        }else{
            header("Location: ".BASE_URL."Home");        }
    }

    public function filtrarTemporada(){
        $temporada = $_POST['filtroTemporada'];
        $productos=$this->model->getProductosPorTemporada($temporada);
        $this->view->ShowProductosFiltrados($productos);
    }
    
    public function filtrarTemporadaAdmin(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $temporada = $_POST['filtroTemporadaAdmin'];
            $productos=$this->model->getProductosPorTemporada($temporada);
            $this->view->ShowProductosFiltradosAdmin($productos);
        }
        else{
            header("Location: ".BASE_URL."Home");        }
    }
}

?>