<?php

require_once "./View/temporadaView.php";
require_once "./Model/temporadaModel.php";
require_once "./Controller/userController.php";

class TemporadaController{

    private $view;
    private $model;
    private $controller;

    function __construct(){
        $this->view = new TemporadaView();
        $this->model = new TemporadaModel();
        $this->controller = new UserController();
    }
    
    function ShowTablaTemporadas(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $temporadas = $this->model->GetTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
               header("Location: ".BASE_URL."Home");       
        }
    }

    function ShowCatalogoTemp(){
        $temporadas = $this->model->GetTemporadas();
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==0){ 
            $this->view->ShowCatalogoTemporadas($temporadas);
        }else{
            $this->view->ShowCatalogoTemporadasNoUsuario($temporadas);
        }
    }

    //el usuario con rol de administrador puede insertar una temporada
    public function InsertarTemporada(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            if(($_POST['temporada'])!= null){   
            $temporada = $_POST['temporada'];
            $this->model->InsertarTemporada($temporada);
            $temporadas = $this->model->GetTemporadas();
            $this->view->ShowTemporadas($temporadas);
            }else{
                header("Location: ".BASE_URL."adminTemporadas");
            }
        }
        else{
            header("Location: ".BASE_URL."login");
        }  
    }
    //Verifica si el usuario logueado es administrador o no y en caso de serlo eliminar la temporada seleccionada
    public function EliminarTemporada($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $this->model->EliminarTemporada($id);
            $temporadas = $this->model->GetTemporadas();
            $this->view->ShowTemporadas($temporadas);      
        }else{
            header("Location: ".BASE_URL."Home");
        }
    } 
    //Verifica si el usuario logueado es administrador o no y en caso de serlo edita la temporada seleccionada
    function ActualizarTemporada($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $temporada = $this->model->GetTemporada($id);
            $this->view->EditarTemporada($temporada);
        }else{
            header("Location: ".BASE_URL."Home");
        }
    }
    //Chequea que esten seteados los datos de la temporada a editar
    public function EditarTemporada($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            if(($_POST['temporada'])!= null){   
            $temporada = $_POST['temporada'];
            $this->model->EditarTemporada($id,$temporada);
            $temporadas = $this->model->GetTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
            header("Location: ".BASE_URL."adminTemporadas");
        }
        }
        else{
            header("Location: ".BASE_URL."login");
        }
    }
    //si esta registrado le muestra con la barra de navegacion con logout, sino con login
    function ShowTemporada($parametros = null){
        $id = $parametros[':ID'];
        $temporada = $this->model->GetTemporada($id);
        if($this->controller->isLogged()){    
            $this->view->ShowTemporadaUnica($temporada);
        }else{
            $this->view->ShowTemporadaUnicaNoUsuario($temporada);
        }
    }
    //le da la posibilidad al usuario admin para editar la temporada o eliminarla
    function ShowTemporadaAdmin($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $temporada = $this->model->GetTemporada($id);
            $this->view->ShowTemporadaAdm($temporada);
        }else{
            header("Location: ".BASE_URL."Home");
        }
        }
}