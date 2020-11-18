<?php

class userModel {

    private $db;

    function __construct(){
        //1 abro la conexion
       $this->db =  new PDO('mysql:host=localhost;'.'dbname=inventario2;charset=utf8', 'root', '');
    }

    function getUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM user WHERE email=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}

