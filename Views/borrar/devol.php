<?php 

	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');

	if (isset($_GET['action'])) {

		$id = $_GET['idpelicula'];

		  $sql = $conexion->prepare("UPDATE peliculas SET estado = 'DISPONIBLE' WHERE idpelicula = $id ");
		  $sql->execute();

		  $sql = $conexion->prepare("DELETE FROM caja  WHERE idpelicula = $id ");
		  $sql->execute();

	 header('location:index.php?action=alquilar');
		 
	}






 ?>