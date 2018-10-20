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
			<?php

			 $longitud = count($usuarios);
				for($i=0; $i<$longitud; $i++) {
					echo '<div> <ul style="float: left;">';
					echo '<h3>Usuario '.$i.'</h3>';
					$longitud1 = count($usuarios[$i]);
					for($j=0; $j<$longitud1; $j++) {		    
					    echo '<tr>'.$usuarios[$i][$j].'</tr> <br>';		    
					}
					echo '</ul></div>';
				}
			 ?>
		 </div>
	</p>
</div>	



<?php
include ('includes/footer.php');
?>