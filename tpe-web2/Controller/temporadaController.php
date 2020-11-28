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
        $this->controller = new userController();
    }

    function ShowTablaTemporadas(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
               header("Location: ".BASE_URL."Home");       
        }
    }

    function ShowCatalogoTemp(){
        $temporadas = $this->model->getTemporadas();
        $this->view->ShowCatalogoTemporadas($temporadas);
    }

    public function insertarTemporada(){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
           $temporada = $_POST['temporada'];
            $this->model->insertarTemporada($temporada);
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
            header("Location: ".BASE_URL."Home");
        }
    }

    public function eliminarTemporada($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
             $id = $parametros[':ID'];
            $this->model->eliminarTemporada($id);
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);      
        }else{
            header("Location: ".BASE_URL."Home");
        }
    } 

    function ActualizarTemporada($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $temporada = $this->model->getTemporada($id);
            $this->view->editarTemporada($temporada);
        }else{
            header("Location: ".BASE_URL."Home");
        }
    }

    public function editarTemporada($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $temporada = $_POST['temporada'];
            $this->model->editarTemporada($id,$temporada);
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
            header("Location: ".BASE_URL."Home");
        }
    }

    function ShowTemporada($parametros = null){
        $id = $parametros[':ID'];
        $temporada = $this->model->getTemporada($id);
        $this->view->ShowTemporadaUnica($temporada);
    }

    function ShowTemporadaAdmin($parametros = null){
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $parametros[':ID'];
            $temporada = $this->model->getTemporada($id);
            $this->view->ShowTemporadaAdm($temporada);
        }else{
            header("Location: ".BASE_URL."Home");
        }
        }
}