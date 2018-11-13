<?php
    session_start();
    $page_Title = 'Resultado de Insertar Contacto en Tabla Contacto';

    require ('includes/clases.php'); 
    $_SESSION['error'] = "";
    $_SESSION['mensaje'] = "";    
    $nombre = $_POST['firstname'];
    $apellido = $_POST['lastname1'];
    $email = $_POST['email'];
    $telefono = $_POST['phone'];
    $asunto = $_POST['subjet'];
    $mensaje = $_POST['message'];

   

   
        $insertarContactoBD = new Registro();
        $insertarContactoBD->registrar_contacto($nombre,$apellido,$email,$telefono,$asunto,$mensaje);

        if($insertarContactoBD->estado != "OK")
        {    
            $_SESSION['error'] = "No se ha podido enviar el mensaje";
        }
        else{
            $_SESSION['mensaje'] = "Se ha enviado correctamente su mensaje, nos pondremos en contacto con usted!";
        }
        $_SESSION['login'] = "no";

   /* }else{
        $_SESSION['error'] = "El usuario con el correo <strong>$email</strong> ya existe";
        $_SESSION['login'] = "no";
    }*/   


    header('Location: contacto.php');

?>