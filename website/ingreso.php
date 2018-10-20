<?php 
if(!isset($_SESSION)){ 
        session_start(); 
    }

    require ('includes/clases.php'); 
    $_SESSION['error1'] = "";
    $_SESSION['error2'] = "";
    $_SESSION['mensaje'] = "";    

    $contraseña = $_POST['password'];   
    $email = $_POST['email'];    

    //Validar usuario
    $loginUsuario = new Registro();
    $usuario = $loginUsuario->loginUsuario($email);

//codigo para validar que el hash en este caso de la base de datos $usuario['contraseña' es igual a $contraseña ingresado por el usuario
    /*if(password_verify($usuario['contraseña'], $contraseña))
	{
		//login exitoso
	}
	else
	{
		//no coinciden
	}*/

	  //var_dump($usuario);
	 if(!empty($usuario['email'])){
	    if( $usuario['email'] == $email &&  $usuario['contraseña'] == $contraseña){
	    	$_SESSION['usuario'] = $usuario['usuario'];
	    	$_SESSION['login'] = "si";   		    	
	    	header('Location: index.php');
	    }elseif($usuario['email'] == $email &&  $usuario['contraseña'] != $contraseña){
			echo $_SESSION['error1'] = "Por favor verificar los datos ingresados";
			header('Location: ingresar.php');
	    }
	  }else{ 
	  	echo $_SESSION['error2'] = "El usuario no esta registrado <a href='registro.php'>Registrarse</a>";
	  	header('Location: ingresar.php');
	  }

?>