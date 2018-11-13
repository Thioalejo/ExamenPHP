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
 	<h2>Ver Usuario</h2>
 </p> 
</div>

<div class="container">
	<?php if (empty($_SESSION['mensaje'])): ?>
		<form action='editarUsuario.php' method='post'>
			<?php foreach ($_SESSION['consulta'] as $row): ?>
				<?php if ($row['email'] == $id){?>

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>	
							</span>		
									<input  class="form-control" id="user" name="user" type="text" value="<?php echo $row['usuario']; ?>" placeholder="Usuario" required="true" disabled>		
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</span>		
									<input class="form-control" id="password" name="password" type="password" value="<?php echo $row['contraseña']; ?>" placeholder="Contraseña" required="true" disabled>			
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="firstname" name="firstname" type="text" value="<?php echo $row['primer_nombre']; ?>" placeholder="Primer Nombre" required="true" disabled>		
						</div>		

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="secondname" name="secondname" type="text" value="<?php echo $row['segundo_nombre']; ?>" placeholder="Segundo Nombre" required="true" disabled>		
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="lastname1" name="lastname1" type="text" value="<?php echo $row['primer_apellido']; ?>" placeholder="Primer Apellido" required="true" disabled>		
						</div>		

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="lastname2" name="lastname2" type="text" value="<?php echo $row['segundo_apellido']; ?>" placeholder="Segundo Apellido" required="true" disabled>		
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-envelope"></span>
							</span>			
									<input class="form-control" id="email1" name="email1" type="email" value="<?php echo $row['email']; ?>" placeholder="Email" disabled>									
						</div>						
					
					<?php if($_SESSION['tipousuario'] == "admin"){ ?>
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>	
							</span>		
									<input  class="form-control" id="rol" name="rol" type="text" value="<?php echo $row['rol']; ?>" placeholder="user o admin" required="true" disabled>		
						</div>
					<?php } ?>
				<?php } ?>		
			<?php endforeach ?>
					<button type="submit" class="btn btn-default btn-block">
					  <a href='adminuser.php'>Regresar</a> 
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