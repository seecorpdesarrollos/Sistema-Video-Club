<?php 

	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');

	if (isset($_GET['action'])) {

		$id_cliente = $_GET['idcliente'];
			

		  $sql = $conexion->prepare("UPDATE clientes SET estado = 'NO ACTIVO' WHERE idcliente = $id_cliente ");
		  $sql->execute();
		  
	  header('location:listadoClientes');
		 
	}


 ?>