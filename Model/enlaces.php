<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){
		// =============================================================
		// enlaces del peliculas
		// =============================================================

		if(  $enlaces == "peliculas" || $enlaces == 'listadoPelis' || $enlaces=='alquilar' || $enlaces=='listaAlquiler' || $enlaces== 'devoluciones' || $enlaces=='buscar'){

			$module =  "views/modules/Peliculas/".$enlaces.".php";
		
		}
		
		else if($enlaces == "borraralquiler"){

			$module =  "views/borrar/borrar.php";
		
		}

		else if($enlaces == "devol"){

			$module =  "views/borrar/devol.php";
		
		}
		else if($enlaces == "ok"){

			$module =  "views/modules/Usuarios/usuarios.php";
		
		}

		else if($enlaces == "okalquiler"){

			$module =  "views/modules/Peliculas/listaAlquiler.php";
		
		}

		else if($enlaces == "okpelis"){

			$module =  "views/modules/Peliculas/listadoPelis.php";
		
		}

		else if($enlaces == "error"){

			$module =  "views/Modules/Peliculas/usuarios.php";
		
		}


		else if($enlaces == "borrarPelis"){

			$module =  "views/borrar/borrar.php";
		
		}

		else if($enlaces == "borrar"){

			$module =  "views/borrar/borrar.php";
		
		}

		else if($enlaces == "editarPelis"){

			$module =  "Views/Modules/Peliculas/editarPeliculas.php";
		
		}
		
		
        // =============================================================
		// enlaces del Clientes
		// =============================================================

		else if($enlaces == "buscarClientes"){

			$module =  "Views/Modules/Clientes/buscarClientes.php";
		
		}


		else if($enlaces == "editarClientes"){

			$module =  "Views/Modules/Clientes/editarClientes.php";
		
		}
		else if($enlaces == "listadoClientes"){

			$module =  "views/modules/Clientes/listadoClientes.php";
		
		}

		else if($enlaces == "bajaLogica"){

			$module =  "views/modules/Clientes/bajaLogica.php";
		
		}

		else if($enlaces == "alta"){

			$module =  "views/modules/Clientes/alta.php";
		
		}
        
        else if($enlaces == "okModiClientes"){

			$module =  "views/modules/Clientes/listadoClientes.php";
		
		}

		else if($enlaces == "cambioClientes"){

			$module =  "views/modules/Clientes/listadoClientes.php";
		
		}


		else if($enlaces == "agregarClientes"){

			$module =  "views/modules/Clientes/agregarClientes.php";
		
		}

		else if($enlaces == "okclientes"){
			$module = "views/modules/Clientes/agregarClientes.php";
		}

// =============================================================
// enlaces del usuarios
// =============================================================
		else if($enlaces == "config"){

			$module =  "Views/Modules/Usuarios/config.php";
		
		}
		else if($enlaces == "editar"){

			$module =  "Views/Modules/Usuarios/editarUsuarios.php";
		
		}

		else if($enlaces == "usuarios"){

			$module =  "Views/Modules/Usuarios/usuarios.php";
		
		}

		else if($enlaces == "cambioUsuario"){

			$module =  "Views/Modules/Usuarios/usuarios.php";
		
		}


		// enlaces del inicio y salir
		// ===========================================================
		else if($enlaces == "index"){

			$module =  "views/modules/App/inicio.php";
		
		}
		else if($enlaces == "salir"){

			$module =  "views/modules/App/salir.php";
		
		}


		else{

			$module =  "views/modules/App/inicio.php";

		}
		
		return $module;

	}
	#--------------------------------------------------------
	#enlaces de la aplicacion 
    
    


}

?>