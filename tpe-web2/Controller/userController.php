<?php

require_once "./View/userView.php";
require_once "./Model/userModel.php";
require_once "./View/AcampandoView.php";

class UserController{

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

    function Logout(){
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
    }

    //toma los datos del front y registra al usuario con rol 0 (no administrador)
    function RegistrarUsuario(){
        $user = $_POST["new_user"];
        $pass = $_POST["new_pass"];
        $admin = 0;
        if(!empty($_POST["new_user"]) && !empty($_POST["new_pass"])){
            $userFromDB = $this->model->GetUser($user);
            if(!$userFromDB){
                $password_hash = password_hash($pass, PASSWORD_DEFAULT);
                $this->model->RegistrarUser($user,$password_hash, $admin);
                session_start();
                $userFromDB = $this->model->GetUser($user);
                $_SESSION['EMAIL'] = $user;
                $_SESSION["ID"] = $userFromDB->id;
                $_SESSION["ADMIN"] = $admin;
                header("Location: ".BASE_URL."productos");  
            }else{
                $user = $_POST['new_user'];
                $this->view->ShowErrorRegistro('El usuario ya se encuentra registrado');
            }   //cierra el else
            }//cierra el primer if
    }//cierra la funcion

//verifica si los datos ingresados son de un usuario registrado en el sitio
    function VerificarUsuario(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];
        if(isset($user)){
        $userFromDB = $this->model->GetUser($user);
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
    //el administrador puede ver los usuarios registrador
    function VerUsuarios(){
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
             $usuarios = $this->model->GetUsers();
             $this->view->ShowUsers($usuarios);
            }
            else{
                $this->view2->ShowHome();
            }
    }
    //chequea si hay una sesion iniciada
    function isLogged(){
        $isLogged = false;
        session_start();
        if (isset($_SESSION['EMAIL'])) {
            $isLogged = true;
        }
        return $isLogged;
    }

    function RegistroUsuario(){
        $this->view->ShowRegistro();
    }
    //un usuario administrador puede cambiar el rol de un usuario comun a usuario admin
    function ConvertirAdmin($params = null){
        //Verifica si esta logueado y si tiene rol de admin
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
            $id_usuario = $params[':ID'];
            $this->model->ConvertirAdmin($id_usuario);
            //Vuelve a pedir el listado de usuarios actualizado y lo muestra en la vista
            $usuarios=$this->model->GetUsers();
            $this->view->ShowUsers($usuarios);    
    }else{
        header("Location: ".BASE_URL."home");  
        }
    }
    //un usuario administrador puede quitarle las funciones de administrador a otro usuario administrador
    function QuitarAdmin($params = null){
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
              $id_usuario = $params[':ID'];
              $this->model->QuitarAdmin($id_usuario);
              //Vuelve a pedir el listado de usuarios actualizado y lo muestra en la vista
              $usuarios=$this->model->GetUsers();
              $this->view->ShowUsers($usuarios);
        }else{
              header("Location: ".BASE_URL."home"); //cambiar el redireccionamiento
        }
    }
    //un usuario administrador puede borrar un usuario
    function BorrarUsuario($params = null){
        if($this->isLogged() && $_SESSION["ADMIN"]==1){
            $id_usuario = $params[':ID'];
            $this->model->EliminarUsuario($id_usuario);
            //Vuelve a pedir el listado de usuarios actualizado y lo muestra en la vista
            $usuarios=$this->model->GetUsers();
            $this->view->ShowUsers($usuarios);
        }else{
            header("Location: ".BASE_URL."home"); //cambiar el redireccionamiento
        }
    }
}
?>