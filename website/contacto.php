<?php
	if(!isset($_SESSION)){ 
	        session_start(); 
	    }
	$Page_Title = 'Contacto';
	$Page = 'Contacto';

	include ('includes/header.php');

	//print_r($_SESSION['tipousuario']);

?>

<div class="jumbotron">
<div  class="container text-center">
 <p>
 	<h2>Envianos tus comentarios o inquietudes</h2>
 </p>
</div>

<div class="container">
	<?php if (empty($_SESSION['mensaje'])): ?>
		<form action='registrarUsuario.php' method='post'>

				

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>			
									<input class="form-control" id="firstname" name="firstname" type="text" placeholder="Nombre(s)" required="true" required="true">		
						</div>		
						

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>			
									<input class="form-control" id="lastname1" name="lastname1" type="text" placeholder="Apellido(s)" required="true" required="true">		
						</div>	

						
						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-envelope"></span>
							</span>			
									<input class="form-control" id="email" name="email" type="email" placeholder="Email" required="true" required="true">	
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-phone"></span>
							</span>			
									<input class="form-control" id="phone" name="phone" type="text" placeholder="Telefono" required="true" required="true">		
						</div>

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="subjet" name="subjet" type="text" placeholder="Asunto" required="true" required="true">		
						</div>

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<textarea class="form-control" id="messa" name="subjet" type="text" placeholder="Asunto" required="true" required="true"></textarea> 		
						</div>


					<button type="submit" class="btn btn-default btn-block">
					  <span class="glyphicon glyphicon-send"></span> Enviar 
					</button>

					</form>
					<?php if(!empty($_SESSION['error'])): ?>
						<div style="background-color: #f4d84b;;margin-top: 15px;height: 40px;border-radius: 4pt;padding:10px;text-align: center;">
							<ul>
								<?php echo $_SESSION['error']; ?>
							</ul>
						</div>
					<?php endif; ?>
		
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