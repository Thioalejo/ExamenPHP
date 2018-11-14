<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$id = $_GET['id'];


// include('includes/clases.php');
// $loginUsuario = new Registro();
// $usuario = $loginUsuario->loginUsuario($id);

  
$Page_Title = 'Ver Usuarios';
$Page = 'Ver';
include ('includes/header.php');

//print_r($_SESSION['consulta']);

?>
<!-- Nota: Lista de iconos de Bootstrap 
 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
-->
<div class="jumbotron">
<div  class="container text-center">
 <p>
 	<h2>Ver contacto</h2>
 </p> 
</div>

<div class="container">
	<?php if (empty($_SESSION['mensaje'])): ?>
        <form action='contactoLista.php' method='post'> 
			<?php foreach ($_SESSION['consulta'] as $row): ?>
				<?php if ($row['Email'] == $id){?>

					<?php if($_SESSION['tipousuario'] == "admin"){ ?>
						
                        <div class="input-group">
							<Label>Nombre: <?php echo $row['Nombre']; ?>" </Label>
											
						    </div>	
                        
						<div class="input-group">
								
								<Label>Apellido: <?php echo $row['Apellido']; ?>	</Label>			
						</div>	

						<div class="input-group">
								<label>Email: <?php echo $row['Email']; ?></label>
									
						</div>		

						<div class="input-group">
									<label>Telefono: <?php echo $row['Telefono']; ?></label>	
										
						</div>
                        <div class="input-group">
									<label>Asunto: <?php echo $row['Asunto']; ?></label>	
										
						</div>
                        <div class="input-group">
									<label>Mensaje: <?php echo $row['Mensaje']; ?></label>	
										
						</div>
                        <div class="input-group">
									<label>Fecha y Hora: <?php echo $row['Fecha_Hora']; ?></label>	
										
						</div>
						<br>
					<?php } ?>
				<?php } ?>		
			<?php endforeach ?>
					<button type="submit" class="btn btn-default btn-block">
					  <a href='contactoLista.php'>Regresar</a> 
					</button>

					</form>
							
	<?php else:?>		
			<div style="background-color: #a3e592;;margin-top: 15px;height: 40px;border-radius: 4pt;padding:10px;text-align: center;">
				<ul>
					<?php echo $_SESSION['mensaje'];?>
				</ul>
			</div>		
	<?php endif; ?>
					

</div>
</div>




<?php
include ('includes/footer.php');
?>