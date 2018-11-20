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
print_r($_SESSION['productos']);
//print_r(isset($_SESSION['productos']));
?>
<style type="text/css">
	.producto{  
    margin-left: 145px;
    margin-right: 145px;
    margin-top: 20px;
	}
</style>
<div class="producto">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Descripcion</th>
	      <th scope="col">precio</th>
	      <th scope="col">cantidad</th>
	    </tr>
	  </thead>
	  <?php foreach ($productos as $row): ?>
	  <tbody>
	    <tr>
	      <th scope="row"><?php echo $row['id'] ?></th>
	      <td><?php echo $row['nombre'] ?></td>
	      <td><?php echo $row['descripcion'] ?></td>
	      <td><?php echo $row['precio'] ?></td>
	      <td><?php echo $row['cantidad'] ?></td>
	    </tr>
	  <?php endforeach ?>	    
	  </tbody>
	</table>
</div>


<?php
include ('includes/footer.php');
?>