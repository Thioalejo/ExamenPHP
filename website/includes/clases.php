<?php
require 'connection.php';

  class Registro {
		public $estado;
	    function __construct() {
	      $this->db = new Connection(); //Se establece conexión automáticamente al instanciar la clase, ya que el método constructor se ejecuta por defecto.
	      //$db = '';
	    }

		function registro_usuario($usuario,$contraseña,$primer_nombre,$segundo_nombre,$primer_apellido,$segundo_apellido,$email){
			//$db = new Connection();
			$sql = ("INSERT INTO `registro`(`usuario`, `contraseña`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `email`) 
									VALUES ('$usuario', '$contraseña', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$email')");
			$stmt = $this->db->query($sql);
	            

			//Validamos si la sentencia se ejecutó.
			if ($stmt) {
			    $this->estado = "OK";
			} else {
			    $this->estado = "Error";
			}

			return $this->estado;
		}
		function consultarUsuario($email){
			$sql = ("SELECT * FROM registro WHERE email = '$email' LIMIT 1");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_array(MYSQLI_ASSOC);

			
			if ($stmt) {
			    $this->estado = "OK";
			} else {
			    $this->estado = "Error";
			}
			return $this->estado;
		}
		function loginUsuario($email){
			$sql = ("SELECT * FROM registro WHERE email = '$email' LIMIT 1");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_array(MYSQLI_ASSOC);

			
			if ($stmt) {
			    return $this->stmt = $stmt;
			} else {
			    return $this->stmt = "Error";
			}			
		}
		function consultarTodo(){
			$sql = ("SELECT * FROM registro");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_all(MYSQLI_ASSOC);

			
			if ($stmt) {
			    return $this->stmt = $stmt;
			} else {
			    return $this->stmt = "Error";
			}			
		}
		function actualizar_usuario($usuario,$contraseña,$primer_nombre,$segundo_nombre,$primer_apellido,$segundo_apellido,$email,$rol){
			//$db = new Connection();
			$sql = ("UPDATE `registro` SET `usuario`= '$usuario' , `contraseña`= '$contraseña' , `primer_nombre` = '$primer_nombre' , `segundo_nombre` ='$segundo_nombre' , `primer_apellido`= '$primer_apellido' , `segundo_apellido`= '$segundo_apellido' , `rol`= '$rol' WHERE `email` = '$email'");
			$stmt = $this->db->query($sql);
	        
	        var_dump($stmt);

			//Validamos si la sentencia se ejecutó.
			if ($stmt) {
			    $this->estado = "OK";
			} else {
			    $this->estado = "Error";
			}

			return $this->estado;
		}
		function borrarUsuario($email){
			$sql = ("DELETE FROM `registro` WHERE `email` = '$email'");
			$stmt = $this->db->query($sql);
			
			if ($stmt) {
			    $this->estado = "OK";
			} else {
			    $this->estado = "Error";
			}
			return $this->estado;
		}
	}	


?>