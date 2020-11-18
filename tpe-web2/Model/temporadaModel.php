<?php

class TemporadaModel{

    private $db;

    function __construct(){
        //1 abro la conexion
        $this->db =  new PDO('mysql:host=localhost;'.'dbname=inventario2;charset=utf8', 'root', '');
    }

    function getTemporadas(){
        $query = $this->db->prepare("SELECT * FROM temporada");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insertartemporada($temporada){
        $sentencia =  $this->db->prepare('INSERT INTO temporada(temporada) VALUES (?)');
        $sentencia->execute(array($temporada));
    }

    public  function eliminarTemporada($id){
        $sentencia = $this->db -> prepare('DELETE FROM temporada WHERE id =?');
        $sentencia->execute(array($id));
    }

    function editarTemporada($id,$temporada){
        $sentencia = $this->db ->prepare("UPDATE `temporada` SET `temporada`= ? WHERE id=?") ;
        $sentencia->execute(array($temporada, $id));
    }

    function getTemporada($id){
        $query = $this->db->prepare("SELECT * FROM temporada  WHERE id=?");
        $query->execute(array($id));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}



    