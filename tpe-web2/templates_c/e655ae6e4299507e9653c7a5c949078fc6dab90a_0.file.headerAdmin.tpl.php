<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 13:46:58
  from 'C:\xampp\htdocs\web\TPE-WEB2-master\tpe-web2\templates\admin\headerAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb6694211e1d6_47542383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e655ae6e4299507e9653c7a5c949078fc6dab90a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TPE-WEB2-master\\tpe-web2\\templates\\admin\\headerAdmin.tpl',
      1 => 1605712703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb6694211e1d6_47542383 (Smarty_Internal_Template $_smarty_tpl) {
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
