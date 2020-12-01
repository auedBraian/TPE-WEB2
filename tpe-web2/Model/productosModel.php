<?php

class AcampandoModel{

    private $db;

    function __construct(){
        //1 abro la conexion
        $this->db =  new PDO('mysql:host=localhost;'.'dbname=inventario2;charset=utf8', 'root', '');
    }

    function GetInventario(){           
        $query = $this->db->prepare("SELECT producto.id, producto.producto, producto.precio, producto.marca, temporada.temporada FROM producto INNER JOIN temporada ON producto.temporada_id = temporada.id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function InsertarProducto($producto,$precio,$marca,$temporada){
        $sentencia =  $this->db->prepare('INSERT INTO producto(producto,precio,marca,temporada_id) VALUES (?,?,?,?)');
        $sentencia->execute(array($producto,$precio,$marca,$temporada));
    }

    public  function EliminarProducto($id){
        $sentencia = $this->db -> prepare('DELETE FROM producto  WHERE id =?');
        $sentencia->execute(array($id));
    }

    function EditarProducto($id,$producto,$precio,$marca,$temporada){
        $sentencia = $this->db ->prepare("UPDATE `producto` SET `producto`=?,`precio`=?,`marca`=?,`temporada_id`= ? WHERE id=?") ;
        $sentencia->execute(array($producto, $precio,$marca,$temporada, $id));
    }

    function GetProducto($id){
        $query = $this->db->prepare("SELECT producto.*,temporada.temporada FROM producto INNER JOIN temporada ON producto.temporada_id = temporada.id WHERE producto.id=?");
        $query->execute(array($id));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function GetProductosPorTemporada($temporada){
        $sentencia = $this->db->prepare("SELECT * FROM producto INNER JOIN temporada ON producto.temporada_id = temporada.id WHERE temporada_id=?");
        $sentencia->execute(array($temporada));
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
 }