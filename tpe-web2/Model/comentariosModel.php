<?php

class ComentariosModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=inventario2;charset=utf8', 'root', '');
    }
         
      function GetComentariosPorProducto($id_producto){
        $sentencia=$this->db->prepare("SELECT * FROM comentario WHERE id_producto=?");
        $sentencia->execute(array($id_producto));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }

      function GetComentarioPorId($id_comentario){
        $sentencia=$this->db->prepare("SELECT * FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id_comentario));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function InsertarComentario($comentario, $valoracion, $id_usuario, $id_producto){
        $sentencia = $this->db->prepare("INSERT INTO comentario(comentario, valoracion, id_usuario, id_producto) VALUES(?,?,?,?)");
        $sentencia->execute(array($comentario, $valoracion, $id_usuario, $id_producto));
        return $sentencia->rowCount();
    }

    function BorrarComentario($id_comentario){
        $sentencia = $this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id_comentario));
        return $sentencia->rowCount();
    }
      
}

?>