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

     function ShowTablaProductos(){
        if($this->controller->isLogged()){
        $productos = $this->model->getInventario();
        $this->view->ShowProductos($productos);
        }else{
             $this->controller->Login();
        }
   }

    function ShowCatalogo(){
        $productos = $this->model->getInventario(); 
        $this->view->ShowCatalogo($productos);
    }
    
   
   //REVISAR EN CLASE
    public function insertarProducto(){
        if($this->controller->isLogged()){
                $producto= $_POST['producto'];
                $precio = $_POST['precio'];
                $marca = $_POST['marca'];
                $temporada = $_POST['temporada_id'];
                $this->model->insertarProducto($producto, $precio, $marca, $temporada);
                $productos = $this->model->getInventario();
                $this->view->ShowProductos($productos);
        }else{
            $this->controller->Login();
       }
    }

    public function eliminarProducto($parametros = null){
        if($this->controller->isLogged()){
            $id = $parametros[':ID'];
           $this->model->deleteProducto($id);
            $productos = $this->model->getInventario();
            $this->view->ShowProductos($productos);
        }else{
            $this->controller->Login();
        }
    }

    function ShowProducto($parametros = null){
        $id = $parametros[':ID'];
        $productos = $this->model->getProducto($id);
        $this->view->ShowProductoUnico($productos);
    }

    function ShowProductoAdmin($parametros = null){
        if($this->controller->isLogged()){
            $id = $parametros[':ID'];
            $productos = $this->model->getProducto($id);
            $this->view->ShowProductoAdm($productos);
        }else{
            $this->controller->Login();
        }
    }

    function ActualizarProducto($parametros = null){
        if($this->controller->isLogged()){
            $id = $parametros[':ID'];
            $productos = $this->model->getProducto($id);
            $this->view->editarProducto($productos);
        }else{
            $this->controller->Login();
        }
    }

    public function editarProducto($parametros = null){
        if($this->controller->isLogged()){
            $id = $parametros[':ID'];
            $producto= $_POST['producto'];
            $precio = $_POST['precio'];
            $marca = $_POST['marca'];
            $temporada = $_POST['temporada'];
            $this->model->editarProducto($id,$producto,$precio,$marca,$temporada);
            $productos = $this->model->getInventario();
            $this->view->ShowProductos($productos);
        }else{
            $this->controller->Login();
        }
    }

    public function filtrarTemporada(){
        $temporada = $_POST['filtroTemporada'];
        $productos=$this->model->getProductosPorTemporada($temporada);
        $this->view->ShowProductosFiltrados($productos);
    }
    
    public function filtrarTemporadaAdmin(){
        $temporada = $_POST['filtroTemporadaAdmin'];
        $productos=$this->model->getProductosPorTemporada($temporada);
        $this->view->ShowProductosFiltradosAdmin($productos);
    }
}

?>