<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 19:34:26
  from 'C:\xampp\htdocs\tpe-web2\templates\headerUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc29832b78534_51442751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52444e8a142e7465c50dd7627cfe5fad6085c1a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\headerUsuario.tpl',
      1 => 1606588455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc29832b78534_51442751 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/css/style.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <button class="btn_menu"><a>MENÚ</a></button>
        <nav>
            <ul class="navigation">
               <li><a href="home">HOME</a></li>
                <li><a href="productos"> PRODUCTOS </a></li>
                <li><a href="temporadas">TEMPORADAS </a></li>
                <li><a href="logout">LOGOUT</a></li>
            </ul>
        </nav>
    </header><?php }
}
