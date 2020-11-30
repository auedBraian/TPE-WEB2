<?php

require_once "./View/acampandoView.php";
require_once "./Model/productosModel.php";
require_once "./Controller/userController.php";

class AcampandoController{

    private $view;
    private $model;
    private $controller;

    function __construct(){
        $this->view = new AcampandoView();
        $this->model = new AcampandoModel();
        $this->controller = new userController();
    }
  
    function Home(){
        if($this->controller->isLogged()){
            $this->view->ShowHomeLogueado();
        }
        else{
            $this->view->ShowHome();
        }
    }

    function Contactenos(){
        $this->view->ShowContactenos();
    }
}

?>