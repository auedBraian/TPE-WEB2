<?php

require_once "./View/acampandoView.php";
require_once "./Model/productosModel.php";

class AcampandoController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new AcampandoView();
        $this->model = new AcampandoModel();
    }

    private function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['EMAIL'])){
           header("Location:". LOGIN);
            die();
        }
    }
  
    function Home(){
        $this->view->ShowHome();
    }

    function Contactenos(){
        $this->view->ShowContactenos();
    }
}

?>