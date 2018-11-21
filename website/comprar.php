<?php 
require ('includes/clases.php'); 
$user = $_GET['user'];
$eliminarcarrito = new Registro();
$eliminarcarrito->pagarCarrito($user);

header('Location: productos.php');

 ?>