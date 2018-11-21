<?php
	if(!isset($_SESSION)){ 
	        session_start(); 
	    }
	$Page_Title = 'Carrito de compra';
	$Page = 'Carrito';

	include ('includes/header.php');
	//include ('includes/clases.php');
	$total = 0 ;
	$totalproductos = 0;
	$consultar = new Registro();
	$carrito = $consultar->consultarCarrito($_SESSION['usuario']);

	if($carrito != "Error"){
		foreach ($carrito as $value) {
			$producCarrito[] = $consultar->consultarProductoCarrito($value['id_producto']);		
		}
	}


?>
<style type="text/css">
	.producto{  
    margin-left: 145px;
    margin-right: 145px;
    margin-top: 20px;
	}
	.numero{
	    width: 60px;	
	}
	.mensaje{
		text-align: center;
    	color: green;
	}
</style>
<?php if($_SESSION['carrito']>0 && isset($producCarrito)){ ?>
<div class="producto">
	<table class="table">
	  <thead class="thead-dark"> 
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Descripcion</th>
	      <th scope="col">Precio</th>
	      <th scope="col">Cantidad</th>
	      <th scope="col"></th>
	    </tr>
	  </thead>
	  <?php foreach ($producCarrito as $row): ?>
	  <tbody>
	    <tr>
	      <form action='agregarCarrito.php?id=<?php echo $row['id']; ?>' method='post'>
		      <th scope="row"><?php echo $row['id'] ?></th>
		      <td><?php echo $row['nombre'] ?></td>
		      <td><?php echo $row['descripcion'] ?></td>		      
		      <?php foreach ($carrito as $fila): ?>
				<?php if($row['id'] == $fila['id_producto']){ ?>
					<td><?php echo $row['precio'];  $total += $row['precio']*$fila['cantidad']; ?></td>
		      		<td><?php echo $fila['cantidad']; $totalproductos += $fila['cantidad']; ?></td>
				<?php } ?>
		      <?php endforeach ?>
		      <td><a class="btn btn-success" href="eliminarcarrito.php?id=<?php echo $row['id'];?>&user=<?php echo $_SESSION['usuario']; ?>">Eliminar</a></td>
	  	  </form>
	    </tr>	    
	  <?php endforeach ?>
	  </tbody>	  
	</table>
	<div>
		<h4> <?php echo "Cantidad de productos: $totalproductos"; ?></h4>
		<h4> <?php echo "El precio total es pagar es: $total"; ?></h4>
		<a class="btn btn-success" href="comprar.php?user=<?php echo $_SESSION['usuario']; ?>">Pagar</a>
	</div>
	<?php 
	$carritoprod = $consultar->productosCarrito($_SESSION['usuario']);
	if($carritoprod){
		$_SESSION['carrito'] = $carritoprod;
	} 
	?> 
</div>

<?php }else{ ?>
	<div class="mensaje">
		<h3>No tienes productos en el carrito.</h3>
	</div>
<?php } ?>

<?php
include ('includes/footer.php');
?>