<?php 
require ('includes/clases.php'); 
$user = $_GET['user'];
$eliminarcarrito = new Registro();
$eliminarcarrito->pagarCarrito($user);
unset($_SESSION['carrito']);
unset($_SESSION['carrito']["total"]);
header('Location: productos.php');

 ?>