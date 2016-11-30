<?php 

	class Conexion{
		public function conectar(){
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
				$conexion->exec('SET CHARACTER SET utf8');
				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conexion;
			} catch (Exception $e) {
				echo "ERROR DE CONEXION". $e->getMessage. $e->getLine;
			}
		}
	}


 ?>