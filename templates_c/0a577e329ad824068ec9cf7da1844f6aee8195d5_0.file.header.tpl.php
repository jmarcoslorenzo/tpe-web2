<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:24:18
  from 'C:\xampp\htdocs\tpe-web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dabe2316b03_86102015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a577e329ad824068ec9cf7da1844f6aee8195d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\header.tpl',
      1 => 1666034654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dabe2316b03_86102015 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/style.css">
    <title>TP2</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="home">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login">Log in</a>
            </li>
        <?php } else { ?>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout">Log out(<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
            </li>
        <?php }?>
            <li class="nav-item">
            <a class="nav-link" href="campeones">Campeones</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="facciones">Facciones</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="filter">Filter</a>
            </li>
        </ul>
        </div>
    </div>
    </nav><?php }
}
