<?php

$Page_Title = 'Ingreso de Usuarios';
$Page = 'ingreso';
include ('includes/header.php');

?>
<!-- Nota: Lista de iconos de Bootstrap 
 https://www.w3schools.com/icons/bootstrap_icons_glyphicons.asp
-->
<div class="jumbotron">
<div class="container text-center">
 <p>
 	<h2>Ingreso de Usuarios</h2>
 </p> 
</div>

<div class="container">
	

             
            <form action='ingreso.php' method='post'>

                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-user"></span>  
                  </span>   
                      <input  class="form-control" id="email" name="email" type="text" placeholder="Correo" required="true">   
                </div>  

                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-lock"></span>
                  </span>   
                      <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" required="true">     
                </div>  


              <button type="submit" class="btn btn-default btn-block">
                <span class="glyphicon glyphicon-send"></span> Enviar 
              </button>

              </form> 
              <?php if(!empty($_SESSION['error2'])): ?>
                <div style="background-color: #f74747;;margin-top: 15px;height: 40px;border-radius: 4pt;padding:10px;text-align: center;">
                  <ul>
                    <?php echo $_SESSION['error2']; ?>
                  </ul>
                </div>
              <?php elseif (!empty($_SESSION['error1'])):?>
                <div style="background-color: #a3e592;;margin-top: 15px;height: 40px;border-radius: 4pt;padding:10px;text-align: center;">
                  <ul>
                    <?php echo $_SESSION['error1'];?>
                  </ul>
                </div>
              <?php endif; ?>

</div>
</div>




<?php
include ('includes/footer.php');
?>