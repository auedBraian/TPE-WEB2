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

    function registrarUsuario(){
        $user = $_POST["new_user"];
        $pass = $_POST["new_pass"];
        $admin = 0;
        if(!empty($_POST["new_user"]) && !empty($_POST["new_pass"])){
            $userFromDB = $this->model->getUser($user);
            if(!$userFromDB){
             $this->model->registrarUser($user, $pass, $admin);
             header("Location: ".BASE_URL."home");  
            }else{
                $user = $_POST['new_user'];
                $this->view->ShowErrorRegistro('El usuario ya se encuentra registrado');
            }   //cierra el else
            }//cierra el primer if
    }//cierra la funcion


   function verificarUsuario(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if(isset($user)){
        $userFromDB = $this->model->getUser($user);
        if(isset($userFromDB) && $userFromDB){
            $hash=$userFromDB->password;
            if(password_verify($pass, $hash)){
                session_start();
                $_SESSION['EMAIL'] = $userFromDB->email;
                $_SESSION["ID"] = $userFromDB->id;
                $_SESSION["ADMIN"] = $userFromDB->rol;
               //Si el Rol es uno, me lleva a las funciones de administrador
                if($_SESSION["ADMIN"]==1){ 
                    header("Location: ".BASE_URL."adminProductos");
                //Si el rol es cero, lo lleva la home
                }else if($_SESSION["ADMIN"]==0){
                    header("Location: ".BASE_URL."productos");
                }
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

    function verUsuarios(){
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
             $usuarios = $this->model->getUsers();
             $this->view->ShowUsers($usuarios);
            }
            else{
                $this->view2->ShowHome();
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


    function registroUsuario(){
        $this->view->ShowRegistro();
    }

    function convertirAdmin($params = null){
        //Verifica si esta logueado y si tiene rol de admin
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
            $id_usuario = $params[':ID'];
            $this->model->convertirAdmin($id_usuario);
            //Vuelve a pedir el listado de usuarios actualizado y lo muestra en la vista
            $usuarios=$this->model->getUsers();
            $this->view->ShowUsers($usuarios);    
    }else{
        header("Location: ".BASE_URL."home");  
        }
    }

    function quitarAdmin($params = null){
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
              $id_usuario = $params[':ID'];
              $this->model->quitarAdmin($id_usuario);
              //Vuelve a pedir el listado de usuarios actualizado y lo muestra en la vista
              $usuarios=$this->model->getUsers();
              $this->view->ShowUsers($usuarios);
        }else{
              header("Location: ".BASE_URL."home"); //cambiar el redireccionamiento
        }
    }

    function borrarUsuario($params = null){
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
            $id_usuario = $params[':ID'];
            $this->model->eliminarUsuario($id_usuario);
            //Vuelve a pedir el listado de usuarios actualizado y lo muestra en la vista
            $usuarios=$this->model->getUsers();
            $this->view->ShowUsers($usuarios);
        }else{
            header("Location: ".BASE_URL."home"); //cambiar el redireccionamiento
        }
    }


}
?>