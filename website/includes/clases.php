<?php
include 'connection.php';
  class Registro {
		public $estado;
	    function __construct() {
	      $this->db = new Connection(); //Se establece conexión automáticamente al instanciar la clase, ya que el método constructor se ejecuta por defecto.
	      //$db = '';
	    }

		function registro_usuario($usuario,$contraseña,$primer_nombre,$segundo_nombre,$primer_apellido,$segundo_apellido,$email){
			//$db = new Connection();
			$sql = ("INSERT INTO `registro`(`usuario`, `contraseña`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `email`) VALUES ('$usuario', '$contraseña', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$email')");
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
			$stmt = $stmt->fetch_all();

			
			if ($stmt) {
			    return $this->stmt = $stmt;
			} else {
			    return $this->stmt = "Error";
			}			
		}
	}	


?>