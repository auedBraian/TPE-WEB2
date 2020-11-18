<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-09 03:31:28
  from 'C:\xampp\htdocs\tpe-web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7fbd70a389d4_89407345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a577e329ad824068ec9cf7da1844f6aee8195d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\header.tpl',
      1 => 1602199365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7fbd70a389d4_89407345 (Smarty_Internal_Template $_smarty_tpl) {
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
