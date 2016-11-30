<?php session_start();
	try {
		$error = '';
		$enviar='';
		$enviado='';

		$conexion = new PDO('mysql:host=localhost;dbname=videoclub', 'root','chavalote');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nomusuario = $_POST['nomusuario'];
			$password = $_POST['password'];
     $sql = $conexion->prepare('SELECT * FROM usuarios WHERE nomusuario = :nomusuario AND 
     	                        password = :password');
     $sql->execute(array(':nomusuario'=>$nomusuario,
     	                  ':password'=>$password));

     $resultado = $sql->fetch();
        if ($resultado != false) {
	      $_SESSION['nomusuario'] = $nomusuario;
	      $enviar .=  '<center> Bienvenido <br>'. ucwords($resultado['nomusuario']). '</center> <br>';
	      $enviar .= '<meta http-equiv="refresh" content="4;url=../../index.php">';
	      $enviado .= '<center><i class="fa fa-cog fa-spin fa-3x fa-fw"></i><br>
	                  <span class="">Accediendo Al Sistema...</span></center><br>';
	   
   } else {
   $error .= '<li> Los Datos ingresados son Incorrecto </li>';
   
}

		}
	} catch (Exception $e) {
		echo "Error  de conexion ala base de datos.";
	}


	






	require 'login.view.php';
 ?>