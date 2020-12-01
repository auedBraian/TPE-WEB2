<?php
require_once './Model/comentariosModel.php';
require_once 'ApiController.php';
require_once './Controller/userController.php';

class ApiComentariosController extends ApiController {
  
    function __construct() {
        parent::__construct();
        $this->model = new ComentariosModel();
        $this->view = new APIView();
        $this->controller= new userController();
    }
    //muestra los comentarios cuando se seleccciona un producto
    public function VerComentariosPorProducto($params = null) {
        $id_producto = $params[':ID'];
        $comentarios = $this->model->VerComentariosPorProducto($id_producto);
        if (!empty($comentarios)) {
            $this->view->response($comentarios, 200);
        }
    }
    //un usuario que no es administrador puede insertar un comentario
    public function InsertarComentario($params = null){
        $body = $this->getData();
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==0){
            $id_usuario =  $_SESSION["ID"];
            if($body->comentario && $body->valoracion){
                $result = $this->model->InsertarComentario($body->comentario,$body->valoracion,$id_usuario,$body->id_producto);
                if($result > 0){
                    $this->view->response("El comentario fue insertado", 200);
                }else{
                    $this->view->response("El comentario no se pudo insertar", 404);
                }
            }
        }
    }   
    //el usuario administrador puede borrar un comentario
    public function BorrarComentario($params = null) {
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==1){
            $id = $params[':ID'];
            $result =  $comentario = $this->model->BorrarComentario($id);
        if($result > 0){
            $this->view->response("El comentario con id=$id fue eliminado", 200);
        }else{
            $this->view->response("El comentario con id=$id no existe", 404);
        }
    }    
}


}