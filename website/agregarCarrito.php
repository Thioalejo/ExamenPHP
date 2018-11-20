<?php 

session_start();

require ('includes/clases.php'); 

$id_producto = $_GET['id'];

$consultar = new Registro();
$productoId = $consultar->consultarIdProducto($id_producto);
//var_dump($productoId);
//var_dump($_SESSION['usuario']);

$cantidad = $productoId['cantidad'];
$precio = $productoId['precio'];
$estado = 0;
$usuario =  $_SESSION['usuario'];
$creado = date("Y-m-d H:i:s");

//var_dump($creado); exit();

$insertarCarro = $consultar->agregarCarrito($id_producto,$cantidad,$precio,$estado,$usuario,$creado);

var_dump($insertarCarro);
exit();



 ?>