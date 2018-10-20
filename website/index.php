<?php

if(!isset($_SESSION)){ 
        session_start(); 
    }
$Page_Title = 'Inicio WebSite PHP-MySQL';
$Page = 'inicio';
include ('includes/header.php');
//require ('includes/connection.php');
//require ('includes/clases.php');
//$db = new Connection();

?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="text-center">
        	<?php
      
		        if(isset($_SESSION['login'])!="si")
		        { 
		        	echo "<p class='text-center'>Curso de Programación Web con PHP y MySQL</p>";
		        	
		        }else
		        {
		        	echo "Bienvenido". $_SESSION['usuario'];
		        	echo "<p class='text-center'>Usted ha ingresado commo administrador</p>";      	
		        }
		        ?></h1>
		        	
		    	

			
        
      </div>
    </div>

<?php
include ('includes/footer.php');
?>