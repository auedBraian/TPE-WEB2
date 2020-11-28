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

    public function GetComentariosPorProducto($params = null) {
        $id_producto = $params[':ID'];
        $comentarios = $this->model->GetComentariosPorProducto($id_producto);
        if (!empty($comentarios)) {
            $this->view->response($comentarios, 200);
        }
    }

    public function InsertarComentario($params = null){
        $body = $this->getData();
        if($this->controller->isLogged() && $_SESSION["ADMIN"]==0){
            $id_usuario =  $_SESSION["ID"];
            if($body->comentario && $body->valoracion){
                $idComentario = $this->model->InsertarComentario($body->comentario,$body->valoracion,$id_usuario,$body->id_producto);
                $this->view->response("El comentario se ha insertado correctamente", 200);
            }else{
                $this->view->response("El comentario no se ha podido insertar", 404);
            }
                /*
               // if (!empty($idComentario)) {
                    $this->view->response($this->model->GetComentariosPorProducto($body->id_producto), 201);
                
            }else {
                $comentarios = $this->model->GetComentariosPorProducto($body->id_producto);
                $this->view->response($comentarios, 200);    
            }}*/
            }
    }   
    
    public function DeleteComentario($params = null) {
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