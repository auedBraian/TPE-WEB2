<?php

require_once "./View/userView.php";
require_once "./Model/userModel.php";
require_once "./View/AcampandoView.php";

class PublicUserController{

    private $view;
    private $model;
    private $view2;

    function __construct(){
        $this->view = new userView();
        $this->model = new userModel();
        $this->view2= new AcampandoView();
    }


    function registroUsuario(){
        $this->view->ShowRegistro();
    }

    function registrarUsuario(){
        $user = $_POST["new_user"];
        $pass = $_POST["new_pass"];
        if(!empty($_POST["new_user"]) && !empty($_POST["new_pass"])){
            $userFromDB = $this->model->getUser($user);
            if(!$userFromDB){
             $this->model->registrarUser($user, $pass);
             header("Location: ".BASE_URL."home");  

            }else{
                $user = $_POST['new_user'];
                $this->view->ShowErrorRegistro('El usuario ya se encuentra registrado');
            }   //cierra el else
            }//cierra el primer if

    }//cierra la funcion
}

?>