<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-19 13:15:39
  from 'C:\xampp\htdocs\web\TPE-WEB2-master\tpe-web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fb661ebeffed1_26470452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd523c56c55f608ff105233e90cb6d5f4dea42e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TPE-WEB2-master\\tpe-web2\\templates\\header.tpl',
      1 => 1605712703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fb661ebeffed1_26470452 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a href="login">LOGIN</a></li>
            </ul>
        </nav>
    </header>
<?php }
}
