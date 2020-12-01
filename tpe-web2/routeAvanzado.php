<?php
 
    require_once 'Controller/acampandoController.php';
    require_once 'Controller/productosController.php';
    require_once 'Controller/temporadaController.php';
    require_once 'Controller/userController.php';
    
    require_once 'routerClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    // rutas publicas
    $r->addRoute("home", "GET", "AcampandoController", "Home");
    $r->addRoute("productos", "GET", "ProductosController", "ShowCatalogo");
    $r->addRoute("producto/:ID", "GET", "ProductosController", "ShowProducto");
    $r->addRoute("temporadas", "GET", "TemporadaController", "ShowCatalogoTemp");
    $r->addRoute("temporada/:ID", "GET", "TemporadaController", "ShowTemporada");
    $r->addRoute("registrarUser","GET","UserController", "RegistroUsuario");
    $r->addRoute("registrarUser","POST","UserController", "RegistrarUsuario");
    
    //rutas privadas
    $r->addRoute("adminProductos", "GET", "ProductosController", "ShowTablaProductos");
    $r->addRoute("adminTemporadas", "GET", "TemporadaController", "ShowTablatemporadas");
    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("logout", "GET", "UserController", "Logout");
    $r->addRoute("verificarUsuario", "POST", "UserController", "VerificarUsuario");
    $r->addRoute("productoAdmin/:ID", "GET", "ProductosController", "ShowProductoAdmin");
    $r->addRoute("temporadaAdmin/:ID", "GET", "TemporadaController", "ShowTemporadaAdmin");
    $r->addRoute("verUsuarios", "GET", "UserController","VerUsuarios");
    $r->addRoute("hacerAdmin/:ID", "GET", "UserController", "ConvertirAdmin");
    $r->addRoute("quitarAdmin/:ID", "GET", "UserController", "QuitarAdmin");
    $r->addRoute("borrarUsuario/:ID", "GET", "UserController", "BorrarUsuario");
    
    //rutas para modificar productos
    $r->addRoute("insertarProducto", "POST", "ProductosController", "InsertarProducto");
    $r->addRoute("editarProducto/:ID", "GET", "ProductosController", "ActualizarProducto");
    $r->addRoute("editarProducto/:ID", "POST", "ProductosController", "EditarProducto");
    $r->addRoute("eliminarProducto/:ID", "GET", "ProductosController", "EliminarProducto");
    
    //rutas para modificar temporadas
    $r->addRoute("insertarTemporada", "POST", "TemporadaController", "InsertarTemporada");
    $r->addRoute("borrarTemporada/:ID", "GET", "TemporadaController", "EliminarTemporada");
    $r->addRoute("editarTemporada/:ID", "GET", "TemporadaController", "ActualizarTemporada");
    $r->addRoute("editarTemporada/:ID", "POST", "TemporadaController", "EditarTemporada");
    $r->addRoute("filtroTemporada", "POST", "ProductosController", "FiltrarTemporada");
    $r->addRoute("filtroTemporadaAdmin", "POST", "ProductosController", "FiltrarTemporadaAdmin");

    //Ruta por defecto.
    $r->setDefaultRoute("AcampandoController", "Home");
  
    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>