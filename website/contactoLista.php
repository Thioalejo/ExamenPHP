<?php
	if(!isset($_SESSION)){ 
	        session_start(); 
	    }
	$Page_Title = 'Administración de Usuarios';
	$Page = 'listacontacto';

	//require ('includes/clases.php');
	include ('includes/header.php');

	$consultar = new Registro();
	$contacto = $consultar->consultarTodoContacto();

	$_SESSION['consulta'] = $contacto;

	print_r(isset($_SESSION['tipousuario']))

?>
<?php
  if(isset($_SESSION['login']) && $_SESSION['login'] == "si")
  {
                ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
			<div class="jumbotron">
			<div class="container container text-center">
				
				<p>Listado de contactanos registrados</p>
			</div>
			</div>

		<div class="container">
			<p class="text-center">
				<div>
					<?php foreach ($contacto as $row): ?>
						<div class="post">
							<article>
								<h2 class="titulo"><?php echo $row['Nombre'].' - '.$row['Apellido'].' - '.$row['Asunto'].' - '.$row['Fecha_Hora']; ?></h2>						
								
								<?php if($_SESSION['tipousuario'] == "admin"){ ?>
                                
                                    <a class="text-success" href="verContacto.php?id=<?php echo $row['Email']; ?>">Ver</a>
									
								<?php } ?>
							</article>
						</div>
					<?php endforeach ?>
				</div>
			</p>
		</div>	
<?php 
	}
	else{
		?>
			<div class="jumbotron">
				<div class="container container text-center">
					<h1>No tiene permisos para ver esta pagina</h1>	
				</div>
			</div>
		<?php 
	}
	?>

<?php
include ('includes/footer.php');
?>