<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Framework Básico: <?php if(isset($this->titulo)) { echo $this->titulo; } ?></title>

    <!--<link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["ruta_css"]; ?>bootstrap.min.css">
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>bootstrap.min.js"></script>-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>querys.js"></script>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><?php if(isset($this->titulo)) { echo $this->titulo; } ?></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                <i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?php echo APP_URL."tareas/"; ?>">Tareas</a></li>
                <li><a href="<?php echo APP_URL."categorias/"; ?>">Categorias</a></li>
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="<?php echo APP_URL."tareas/"; ?>">Tareas</a></li>
        <li><a href="<?php echo APP_URL."categorias/"; ?>">Categorias</a></li>
    </ul>
    <div class="container">
    <?php 
        if ($this->_msg->hasMessages()) {
            echo $this->_msg->display();
        }
    ?>
