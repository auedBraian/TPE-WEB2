<?php

require_once "./View/userView.php";
require_once "./Model/userModel.php";
require_once "./View/AcampandoView.php";

class userController{

    private $view;
    private $model;
    private $view2;

    function __construct(){
        $this->view = new userView();
        $this->model = new userModel();
        $this->view2= new AcampandoView();
    }

   function Login(){
       $this->view->ShowLogin();
   }

   function logout(){
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
    }

   function verifyUser(){

        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
    
        if(isset($user)){

        $userFromDB = $this->model->getUser($user);

        if(isset($userFromDB) && $userFromDB){

            $hash=$userFromDB->password;

            if(password_verify($pass, $hash)){
                
                session_start();
                $_SESSION['EMAIL'] = $userFromDB->email;
                header("Location: ".BASE_URL."adminProductos");
            }
            else{
                $this->view->ShowLogin("Contraseña incorrecta");
            }
        }
            else{
            // No existe el user en la DB
            $this->view->ShowLogin("El usuario no existe");
            }
        }
    }
    
    function isLogged(){
        $isLogged = false;
        session_start();
        if (isset($_SESSION['EMAIL'])) {
            $isLogged = true;
        }
        return $isLogged;
    }

}

?>