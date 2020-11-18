<?php
 
    require_once 'Controller/acampandoController.php';
    require_once 'Controller/productosController.php';
    require_once 'Controller/temporadaController.php';
    require_once 'Controller/userController.php';
    require_once 'Controller/publicUserController.php';
    require_once 'routerClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    // rutas publicas
    $r->addRoute("home", "GET", "acampandoController", "Home");
    $r->addRoute("productos", "GET", "productosController", "ShowCatalogo");
    $r->addRoute("producto/:ID", "GET", "productosController", "ShowProducto");
    $r->addRoute("temporadas", "GET", "temporadaController", "ShowCatalogoTemp");
    $r->addRoute("temporada/:ID", "GET", "temporadaController", "ShowTemporada");
    $r->addRoute("registrarUser","GET","publicUserController", "registroUsuario");
    $r->addRoute("registrarUser","POST","publicUserController", "registrarUsuario");

   
    
    //rutas privadas
    $r->addRoute("adminProductos", "GET", "productosController", "ShowTablaProductos");
    $r->addRoute("adminTemporadas", "GET", "temporadaController", "ShowTablatemporadas");
    $r->addRoute("login", "GET", "userController", "Login");
    $r->addRoute("logout", "GET", "userController", "logout");
    $r->addRoute("verificarUser", "POST", "userController", "verifyUser");
    $r->addRoute("productoAdmin/:ID", "GET", "productosController", "ShowProductoAdmin");
    $r->addRoute("temporadaAdmin/:ID", "GET", "temporadaController", "ShowTemporadaAdmin");

    //rutas para modificar productos
    $r->addRoute("insertarProducto", "POST", "productosController", "insertarProducto");
    $r->addRoute("editarProducto/:ID", "GET", "productosController", "ActualizarProducto");
    $r->addRoute("editarProducto/:ID", "POST", "productosController", "editarProducto");
    $r->addRoute("eliminarProducto/:ID", "GET", "productosController", "eliminarProducto");
    

    //rutas para modificar temporadas
    $r->addRoute("insertarTemporada", "POST", "temporadaController", "insertarTemporada");
    $r->addRoute("borrarTemporada/:ID", "GET", "temporadaController", "eliminarTemporada");
    $r->addRoute("editarTemporada/:ID", "GET", "temporadaController", "ActualizarTemporada");
    $r->addRoute("editarTemporada/:ID", "POST", "temporadaController", "editarTemporada");
    $r->addRoute("filtroTemporada", "POST", "productosController", "filtrarTemporada");
    $r->addRoute("filtroTemporadaAdmin", "POST", "productosController", "filtrarTemporadaAdmin");

    //Ruta por defecto.
    $r->setDefaultRoute("acampandoController", "Home");
  
    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>