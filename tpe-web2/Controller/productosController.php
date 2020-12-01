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
        $this->controller = new UserController();
    }

    //El usuario admin ve la tabla productos con la funcionalidad de editar, eliminar, etc.
     function ShowTablaProductos(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $productos = $this->model->GetInventario();
            $this->view->ShowProductos($productos);
        }else{
            header("Location: ".BASE_URL."Home");        }
     }

    //El usuario no registrado ve la tabla productos pero no puede editar ni nada
    function ShowCatalogo(){
        $productos = $this->model->GetInventario(); 
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==0){ 
            $this->view->ShowCatalogo($productos);
        }else{
            $this->view->ShowCatalogoNoUsuario($productos);
        }
    }
    //Funcion para insertar un producto(solo si es usuario administrdor)
    public function InsertarProducto(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            if(($_POST['producto'])!=null && ($_POST['precio'])!=null && ($_POST['marca'])!=null && ($_POST['temporada_id'])!=null){             
                    $producto= $_POST['producto'];
                    $precio = $_POST['precio'];
                    $marca = $_POST['marca'];
                    $temporada = $_POST['temporada_id'];
                    $this->model->InsertarProducto($producto, $precio, $marca, $temporada);
                    header("Location: ".BASE_URL."adminProductos");
                }
                    header("Location: ".BASE_URL."adminProductos");
                }else{
                    header("Location: ".BASE_URL."login");
        }
    }

    //Funcion para eliminar un producto(solo si es usuario administrdor)
    public function EliminarProducto($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $this->model->EliminarProducto($id);
            $productos = $this->model->GetInventario();
            $this->view->ShowProductos($productos);
        }else{
            header("Location: ".BASE_URL."Home");        }
    }

   
    //funcion para ver un producto (el usuario logueado pero que no es administrador)
    function ShowProducto($parametros = null){
        $id = $parametros[':ID'];
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==0){
             $productos = $this->model->GetProducto($id);
             $this->view->ShowProductoUnico($productos); 
        }else{
             //El usuario no registrado ve el producto pero no puede editar ni nada
             $producto = $this->model->GetProducto($id);
             $this->view->ShowProductoUnicoNoLogueado($producto); 
        }
    }
    
    //funcion para ver un producto(el usuario administrador puede editarlo o borrarlo)
    function ShowProductoAdmin($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $productos = $this->model->GetProducto($id);
            $this->view->ShowProductoAdm($productos);
            //mostrar los comentarios, con la opcion de eliminarlos
        }else{
            header("Location: ".BASE_URL."Home");        }
    }

    //El usuario administrador puede actualizar un producto
    function ActualizarProducto($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $productos = $this->model->GetProducto($id);
            $this->view->EditarProducto($productos);
        }else{
            header("Location: ".BASE_URL."Home");        }
    }
    //Verifica si se ingresaron todos los datos para editar el producto, y si quien lo edita es administrador
    public function EditarProducto($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            if(($_POST['producto'])!= null && ($_POST['precio'])!= null && ($_POST['marca'])!= null && ($_POST['temporada'])!= null){             
                $producto= $_POST['producto'];
                $precio = $_POST['precio'];
                $marca = $_POST['marca'];
                $temporada = $_POST['temporada'];
                $this->model->EditarProducto($id,$producto,$precio,$marca,$temporada);
                $productos = $this->model->GetInventario();
                $this->view->ShowProductos($productos);
            }else{
                 header("Location: ".BASE_URL."adminProductos");
            }
            }else{
                 header("Location: ".BASE_URL."login");
            }
    }
    //Filtro para el usuario no administrador y para el no registrado
    public function FiltrarTemporada(){
        $temporada = $_POST['filtroTemporada'];
        $productos=$this->model->GetProductosPorTemporada($temporada);
        $this->view->ShowProductosFiltrados($productos);
    }
    //Filtro para el usuario administrador, puede editar, eliminar o insertar temporadas
    public function FiltrarTemporadaAdmin(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $temporada = $_POST['filtroTemporadaAdmin'];
            $productos=$this->model->GetProductosPorTemporada($temporada);
            $this->view->ShowProductosFiltradosAdmin($productos);
        }
        else{
            header("Location: ".BASE_URL."logi");
        }
    }
}

?>