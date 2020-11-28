<?php
    require_once 'RouterClass.php';
    require_once 'api/ApiComentariosController.php';

    // instacio el router
    $router = new Router();
    // armo la tabla de ruteo de la API REST
   
    $router->addRoute('comentarios/:ID','GET','ApiComentariosController','GetComentariosPorProducto');
    $router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentariosController', 'DeleteComentario');
    $router->addRoute('comentarios', 'POST', 'ApiComentariosController', 'InsertarComentario');

     //run
    $router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']); 