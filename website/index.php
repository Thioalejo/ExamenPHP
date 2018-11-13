<?php

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
        <h1 class="text-center">Tercera Evaluación (20%)</h1>
        <p class="text-center">Curso de Programación Web con PHP y MySQL</p>
      </div>
    </div>

<?php
$Fecha_Hora = date("d-m-Y") ." ". date ("h:i:s");
echo $Fecha_Hora;
include ('includes/footer.php');
?>