<?php 
require ('includes/clases.php'); 
$id = $_GET['id'];
$user = $_GET['user'];
$eliminarcarrito = new Registro();
$eliminarcarrito->borrarCarrito($id,$user);

header('Location: carrito.php');

 ?>