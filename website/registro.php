<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
  
$Page_Title = 'Registro de Usuarios';
$Page = 'registro';
include ('includes/header.php');

?>
<!-- Nota: Lista de iconos de Bootstrap 
 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
-->
<div class="jumbotron">
<div  class="container text-center">
 <p>
 	<h2>Registro de Usuarios</h2>
 </p> 
</div>

<div class="container">
	<?php if (empty($_SESSION['mensaje'])): ?>
		<form action='registrarUsuario.php' method='post'>

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>	
							</span>		
									<input  class="form-control" id="user" name="user" type="text" placeholder="Usuario" required="true" required="true">		
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-lock"></span>
							</span>		
									<input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" required="true" required="true">			
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="firstname" name="firstname" type="text" placeholder="Primer Nombre" required="true" required="true">		
						</div>		

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="secondname" name="secondname" type="text" placeholder="Segundo Nombre" required="true">		
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="lastname1" name="lastname1" type="text" placeholder="Primer Apellido" required="true" required="true">		
						</div>		

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-edit"></span>
							</span>			
									<input class="form-control" id="lastname2" name="lastname2" type="text" placeholder="Segundo Apellido" required="true">		
						</div>	

						<div class="input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-envelope"></span>
							</span>			
									<input class="form-control" id="email" name="email" type="email" placeholder="Email(para iniciar sesion)" required="true">	
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