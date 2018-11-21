<?php 

session_start();

require ('includes/clases.php'); 

$id_producto = $_GET['id'];
$cantidadproducto = $_POST['cantidad'];

$consultar = new Registro();
$productoId = $consultar->consultarIdProducto($id_producto);
//var_dump($productoId);
//var_dump($_SESSION['usuario']);

$cantidad = $cantidadproducto;
$precio = $productoId['precio'];
$estado = 0;
$usuario =  $_SESSION['usuario'];
$creado = date("Y-m-d H:i:s");


//var_dump($cantidadproducto); exit();


if($cantidad > "0"){
	$insertarCarro = $consultar->agregarCarrito($id_producto,$cantidad,$precio,$estado,$usuario,$creado); 
	echo "<script>alert('producto $id_producto agregado'); window.location='productos.php';</script>";	
	$carritoprod = $consultar->productosCarrito($usuario);
	if($carritoprod){
		$_SESSION['carrito'] = $carritoprod;
	}
	if($insertarCarro != "OK"){
		echo "<script>alert('Error en la base de datos, por favor comuniquese con su administrador'); window.location='productos.php';</script>";
	}
}else{	
	echo "<script>alert('Por favor ingrese un valor mayor a 0'); window.location='productos.php';</script>";
}


 ?>