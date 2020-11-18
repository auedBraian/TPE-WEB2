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
        if($this->controller->isLogged()){
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
            $this->controller->Login();
        }
    }

    function ShowCatalogoTemp(){
        $temporadas = $this->model->getTemporadas();
        $this->view->ShowCatalogoTemporadas($temporadas);
    }

    public function insertarTemporada(){
        if($this->controller->isLogged()){
           $temporada = $_POST['temporada'];
            $this->model->insertarTemporada($temporada);
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
            $this->controller->Login();
        }
    }

    public function eliminarTemporada($parametros = null){
        if($this->controller->isLogged()){
             $id = $parametros[':ID'];
            $this->model->eliminarTemporada($id);
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);      
        }else{
            $this->controller->Login();
        }
    } 

    function ActualizarTemporada($parametros = null){
        if($this->controller->isLogged()){
            $id = $parametros[':ID'];
            $temporada = $this->model->getTemporada($id);
            $this->view->editarTemporada($temporada);
        }else{
            $this->controller->Login();
        }
    }

    public function editarTemporada($parametros = null){
        if($this->controller->isLogged()){
            $id = $parametros[':ID'];
            $temporada = $_POST['temporada'];
            $this->model->editarTemporada($id,$temporada);
            $temporadas = $this->model->getTemporadas();
            $this->view->ShowTemporadas($temporadas);
        }else{
            $this->controller->Login();
        }
    }

    function ShowTemporada($parametros = null){
        $id = $parametros[':ID'];
        $temporada = $this->model->getTemporada($id);
        $this->view->ShowTemporadaUnica($temporada);
    }

    function ShowTemporadaAdmin($parametros = null){
        $id = $parametros[':ID'];
        $temporada = $this->model->getTemporada($id);
        $this->view->ShowTemporadaAdm($temporada);
    }
}