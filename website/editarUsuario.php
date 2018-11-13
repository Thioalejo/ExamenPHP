<?php
    session_start();
    $page_Title = 'Resultado de Actualizar Registro en Tabla Usuarios';

    require ('includes/clases.php'); 
    $_SESSION['error'] = "";
    $_SESSION['mensaje'] = "";    
    $usuario = $_POST['user'];
    $contraseña = $_POST['password'];
    $primer_nombre = $_POST['firstname'];
    $segundo_nombre = $_POST['secondname'];
    $primer_apellido = $_POST['lastname1'];
    $segundo_apellido = $_POST['lastname2'];
    $email = $_POST['email'];
    $rol = $_POST['rol'];


    $_SESSION['usuario'] = $usuario;

    //Validar usuario
    $consultarUsuario = new Registro();
    $consultarUsuario->consultarUsuario($email);
    
    
    if($consultarUsuario->estado == "OK" && $rol !="" ){
        $insertarRegistroBD = new Registro();
        $insertarRegistroBD->actualizar_usuario($usuario,$contraseña,$primer_nombre,$segundo_nombre,$primer_apellido,$segundo_apellido,$email,$rol);
        $_SESSION['tipousuario'] = $rol;         
    }  


    header('Location: adminuser.php');

?>