<?php

class userModel {

    private $db;

    function __construct(){
        //1 abro la conexion
       $this->db =  new PDO('mysql:host=localhost;'.'dbname=inventario2;charset=utf8', 'root', '');
    }

    function GetUsers(){
        $sentencia = $this->db->prepare("SELECT * FROM user");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE email=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function EliminarUsuario($id){
        $sentencia = $this->db->prepare('DELETE FROM user WHERE id =?');
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function RegistrarUser($user,$password,$admin){
       $sentencia = $this->db->prepare("INSERT INTO user(email, password, rol) VALUES(?,?,?)");
       $sentencia->execute(array($user,$password,$admin));
       return $sentencia->fetch(PDO::FETCH_OBJ);
     }

    function ConvertirAdmin($id){
        $admin=1;
        $sentencia = $this->db ->prepare("UPDATE `user` SET `rol`=? WHERE id=?") ;
        $sentencia->execute(array($admin, $id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function QuitarAdmin($id){
        $admin=0;
        $sentencia = $this->db->prepare("UPDATE `user` SET `rol`=? WHERE id=?") ;
        $sentencia->execute(array($admin, $id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}