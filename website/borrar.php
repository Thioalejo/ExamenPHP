<?php 
require ('includes/clases.php'); 
$id = $_GET['id'];
$eliminarUsuario = new Registro();
$eliminarUsuario->borrarUsuario($id);

header('Location: adminuser.php');

 ?>