<?php 

	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');

	if (isset($_GET['action'])) {

		$id_alquiler = $_GET['idalquiler'];
			

		  $sql = $conexion->prepare("DELETE FROM alquileres WHERE idalquiler = $id_alquiler ");
		  $sql->execute();
		  
	  header('location:listaAlquiler');
		 
	}

		if (isset($_GET['action'])) {
           if ($_GET['action'] == 'borrarPelis') {
           
				$id = $_GET['idpelicula'];
					

				  $sql = $conexion->prepare("DELETE FROM peliculas WHERE idpelicula = $id ");
				  $sql->execute();
				  
			  header('location:listadoPelis');
           }
			 
		}


			if (isset($_GET['action'])) {
                if ($_GET['action'] == 'borrar'){
				$id = $_GET['idusuario'];
					

				  $sql = $conexion->prepare("DELETE FROM usuarios WHERE idusuario = $id ");
				  $sql->execute();
				  
			  header('location:usuarios');
		 }
	}




 ?>