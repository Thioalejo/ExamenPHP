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
	        
	        //var_dump($stmt);

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

		function registrar_contacto($Nombre,$Apellido,$Email,$Telefono,$Asunto,$Mensaje){
			//$db = new Connection();
			$Fecha_Hora = date("d-m-Y") ." ". date ("h:i:s");
			$sql = ("INSERT INTO `contacto`(`Nombre`, `Apellido`, `Email`, `Telefono`, `Asunto`, `Mensaje`, `Fecha_Hora`) 
									VALUES ('$Nombre', '$Apellido', '$Email', '$Telefono', '$Asunto', '$Mensaje', '$Fecha_Hora')");
			$stmt = $this->db->query($sql);
	            

			//Validamos si la sentencia se ejecutó.
			if ($stmt) {
			    $this->estado = "OK";
			} else {
			    $this->estado = "Error";
			}

			return $this->estado;
		}

		function consultarTodoContacto(){
			$sql = ("SELECT * FROM `contacto` ORDER BY Fecha_Hora ASC");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_all(MYSQLI_ASSOC);

			
			if ($stmt) {
			    return $this->stmt = $stmt;
			} else {
			    return $this->stmt = "Error";
			}			
		}

		function consultarProductos(){
			$sql = ("SELECT * FROM productos");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_all(MYSQLI_ASSOC);

			
			if ($stmt) {
			    return $this->stmt = $stmt;
			} else {
			    return $this->stmt = "Error";
			}			
		}
		function consultarIdProducto($id){
			$sql = ("SELECT * FROM productos WHERE id = '$id' LIMIT 1");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_array(MYSQLI_ASSOC);

			
			if ($stmt) {
			    $this->estado = $stmt;
			} else {
			    $this->estado = "Error";
			}
			return $this->estado;
		}
		function agregarCarrito($id_producto,$cantidad,$precio,$estado,$usuario,$creado){
			//$db = new Connection();
			$sql = ("INSERT INTO `carro`(`id_producto`, `cantidad`, `precio`, `estado`, `usuario`, `creado`) 
									VALUES ('$id_producto', '$cantidad', '$precio', '$estado', '$usuario', '$creado')");
			$stmt = $this->db->query($sql);
	            

			//Validamos si la sentencia se ejecutó.
			if ($stmt) {
			    $this->estado = "OK";
			} else {
			    $this->estado = "Error";
			}

			return $this->estado;
		}
		function consultarCarrito($usuario){
			$sql = ("SELECT `id_producto`, SUM(`cantidad`) AS 'cantidad',SUM(`precio`) AS 'precio' FROM `carro` WHERE `usuario` = '$usuario' AND `estado` = 0 GROUP BY `id_producto`");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_all(MYSQLI_ASSOC);
			
			if ($stmt) {
			    $this->estado = $stmt;
			} else {
			    $this->estado = "Error";
			}
			return $this->estado;
		}
		function consultarProductoCarrito($id){
			$sql = ("SELECT * FROM productos WHERE id = '$id' LIMIT 1");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_array(MYSQLI_ASSOC);

			
			if ($stmt) {
			    $this->estado = $stmt;
			} else {
			    $this->estado = "Error";
			}
			return $this->estado;
		}
		function productosCarrito($usuario){
			$sql = ("SELECT SUM(`cantidad`) as 'total' FROM `carro` WHERE `usuario` = '$usuario' AND `estado` = 0");
			$stmt = $this->db->query($sql);
			$stmt = $stmt->fetch_array(MYSQLI_ASSOC);
			
			if ($stmt) {
			    $this->estado = $stmt;
			} else {
			    $this->estado = "Error";
			}
			return $this->estado;
		}
		function borrarCarrito($id,$usuario){
			$sql = ("DELETE FROM `carro` WHERE `usuario` = '$usuario' AND `id_producto` = '$id'");
			$stmt = $this->db->query($sql);
			
			if ($stmt) {
			    $this->estado = "OK";
			} else {
			    $this->estado = "Error";
			}
			return $this->estado;
		}
		function pagarCarrito($usuario){
			$sql = ("UPDATE `carro` SET `estado` = 1 WHERE `usuario` = '$usuario'");
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