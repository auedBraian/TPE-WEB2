<?php
require_once "./libs/smarty/Smarty.class.php";

class userView{
    private $title;

    function __construct(){
        $this->title = "Login";
    }

    function ShowLogin($message=""){
       $smarty = new Smarty();
       $smarty->assign('titulo_s', $this->title);
       $smarty->assign('message', $message);
       $smarty->display('../templates/admin/login.tpl'); // muestro el template 
    }

    function ShowRegistro($message=""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('../templates/usuario/registroUsuario.tpl'); // muestro el template 
     } 


     function ShowErrorRegistro($message=""){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('message', $message);
        $smarty->display('../templates/usuario/registroUsuario.tpl'); // muestro el template 
     }


     function ShowUsers($usuarios){
      $smarty = new Smarty();
      $smarty->assign('titulo_s', $this->title);
      $smarty->assign('users_s', $usuarios);
      $smarty->display('../templates/admin/permisosAdmin.tpl'); // muestro el template 

     }
}


?>