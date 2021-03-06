<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
  
$Page_Title = 'Productos';
$Page = 'Productos';
include ('includes/header.php');

$consultar = new Registro();
$productos = $consultar->consultarProductos();

$_SESSION['productos'] = $productos;


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
</style>
<div class="producto">
	<table class="table">
	  <thead class="thead-dark"> 
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Descripcion</th>
	      <th scope="col">Precio</th>
	      <th scope="col">Disponible</th>
	      <?php if(isset($_SESSION['usuario'])){?>
	      	<th scope="col">Cantidad</th>
	      <?php } ?>
	    </tr>
	  </thead>
	  <?php foreach ($productos as $row): ?>
	  <tbody>
	    <tr>
	      <form action='agregarCarrito.php?id=<?php echo $row['id']; ?>' method='post'>
		      <th scope="row"><?php echo $row['id'] ?></th>
		      <td><?php echo $row['nombre'] ?></td>
		      <td><?php echo $row['descripcion'] ?></td>
		      <td><?php echo $row['precio'] ?></td>		      
			  <td><?php echo $row['cantidad'] ?></td>
			  <?php if(isset($_SESSION['usuario'])){?>
			      <td><input class="numero" name="cantidad" type="number" placeholder="<?php echo '1'.'-'.$row['cantidad'] ?>"></td>
			      <td><button type="submit" class="btn btn-success">Agregar</button></td>
		      <?php } ?>
	  	  </form>
	    </tr>
	  <?php endforeach ?>	    
	  </tbody>
	</table>
</div>

<?php
include ('includes/footer.php');
?>