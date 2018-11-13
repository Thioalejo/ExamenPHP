<?php
	if(!isset($_SESSION)){ 
	        session_start(); 
	    }
	$Page_Title = 'Administración de Usuarios';
	$Page = 'adminuser';

	//require ('includes/clases.php');
	include ('includes/header.php');

	$consultar = new Registro();
	$usuarios = $consultar->consultarTodo();

	$_SESSION['consulta'] = $usuarios;

	print_r(isset($_SESSION['tipousuario']))

?>
<?php
  if(isset($_SESSION['login']) && $_SESSION['login'] == "si")
  {
                ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
			<div class="jumbotron">
			<div class="container container text-center">
				<h1>Administración de Usuarios</h1>
				<p>Listado de Usuarios Registrados</p>
			</div>
			</div>

		<div class="container">
			<p class="text-center">
				<div>
					<?php foreach ($usuarios as $row): ?>
						<div class="post">
							<article>
								<h2 class="titulo"><?php echo $row['usuario'].' - '.$row['rol']; ?></h2>						
								<a class="text-success" href="ver.php?id=<?php echo $row['email']; ?>">Ver</a>
								<?php if($_SESSION['tipousuario'] == "admin"){ ?>
									<a class="text-warning" href="modificar.php?id=<?php echo $row['email']; ?>">| Editar |</a>
									<a class="text-danger" href="borrar.php?id=<?php echo $row['email']; ?>">Borrar </a>
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