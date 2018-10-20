<?php

/**
Conexión a una Base de Datos usando PHP y la Herencia de las Clase MySQLi
 */
class Connection extends MySQLi
{
	public $estado;
	//public $con;
	
	function __construct()
	{
		parent::__construct('localhost', 'root', '', 'dbwebsite'); //Acceder al constructor de la clase padre MySQLi.
        $this->query("Set Names 'utf8';"); //Configurar que la transacción de datos se haga usando el cotejamiento UTF8.
        $this->connect_errno ? die('Error con la conexión') : $estado = 'Conectado'; //Ejemplo de uso del Operador Ternario; el cual permite evaluar una condición. Si la condiciónse se cumple, entonces se ejecuta lo que se ponga después del signo de interrogación (?); de lo contrario, se ejecuta lo que se ponga después de los dos puntos (:).
        // = (condición) ? true : false;
        //echo $estado;
        unset($estado); //Para eliminar la variable y liberar memoria.



		return $this->estado;
		//unset ($estado); //Para eliminar la variable y liberar memoria.
	}


	function cerrar(){
		$this->close(); //Cerrar la conexión.
	}
}

//$db = new Connection();
?>