<?php

$Page_Title = 'Inicio WebSite PHP-MySQL';
$Page = 'inicio';
include ('includes/header.php');

?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container container text-center">
        <h1>Bienvenido <?php echo $usuario ?></h1>
        <p>Usted ha ingresado como administrador</p>
      </div>
    </div>

<?php
include ('includes/footer.php');
?>