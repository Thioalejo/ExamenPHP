<?php
    if(!isset($_SESSION)) 
    { 
        session_start();         
    }

require ('includes/clases.php'); 
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $Page_Title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <ul class="nav navbar-nav">
                <li class="<?php if ($Page =='inicio'){ echo 'active';} ?>"><a href="index.php">Inicio</a></li>
                <li class="<?php if ($Page =='nosotros'){ echo 'active';} ?>"><a href="#">Nosotros</a></li>
                <li class="<?php if ($Page =='productos'){ echo 'active';} ?>"><a href="">Productos</a></li>
                <li class="<?php if ($Page =='ofertas'){ echo 'active';} ?>"><a href="#">Ofertas</a></li>
                <li class="<?php if ($Page =='servicios'){ echo 'active';} ?>"><a href="#">Servicios</a></li>
                <li class="<?php if ($Page =='contacto'){ echo 'active';} ?>"><a href="#">Contacto</a></li>
                 
                <?php 
                 if(!isset($_SESSION['login']) || $_SESSION['login'] == "no" || empty($_SESSION['login'])){
                ?>
                    <li class="<?php if ($Page =='registro'){ echo 'active';} ?>"><a href="registro.php">Registrarse</a></li>
                    <li class="<?php if ($Page =='ingreso'){ echo 'active';} ?>"><a href="ingresar.php">Ingresar</a></li>
                <?php
                }
                ?>

                <?php 
                 if($_SESSION['login'] == "si"){
                ?>
                    <li class="<?php if ($Page =='adminuser'){ echo 'active';} ?>"><a href="adminuser.php">Administrar Usuarios</a></li>
                    <li><a href="salir.php">Salir</a></li>
                    <li><a href="#"> <?php echo $_SESSION['usuario']; ?></a></li>
                <?php
                }
                ?>              
                
                
            </ul>             
        </div>      
    </nav>