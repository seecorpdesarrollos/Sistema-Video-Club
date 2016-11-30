<?php
require_once "conexion.php";

   class Datos extends Conexion {
 	 	 	
 	 	 	public function registrarUsuarioModel($datosModel,$tabla){

   			$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nomusuario,password) VALUES(:nomusuario,:password)");

   			$stmt->bindParam(':nomusuario',$datosModel['nomusuario'], PDO::PARAM_STR);
   			$stmt->bindParam(':password',$datosModel['password'], PDO::PARAM_STR);

   			if ($stmt->execute()) {
   				return 'success';
   			}else{
                return 'error';
   			}
   			$stmt->close();
 	 	 }
#-----------------------------------------------------------
#obtener usuarios
 	 	public function getUsuariosModel($tabla){
 	 		$sql=Conexion::conectar()->prepare("SELECT *  FROM $tabla");
 	 		$sql->execute();
 	 		return $sql->fetchAll();
 	 		$sql->close();
 	 	} 
#-----------------------------------------------------------------
#total de Clientes
      public function totalClientesModel($tabla){
         $sql=Conexion::conectar()->prepare("SELECT * , COUNT(*) as total FROM $tabla");
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();
      }
#---------------------------------------------------------------------
#total de peliculas
        public function totalPeliculasModel($tabla){
         $sql=Conexion::conectar()->prepare("SELECT estado , COUNT(*) as total FROM $tabla WHERE estado = 'ALQUILADA'");
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();
      }
#----------------------------------------------------------------------------
#insertar peliculas#	

         public function registrarPeliculasModel($datosModel,$tabla){

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idgenero,nombrepeli,detalle,protagonista)VALUES(:idgenero,:nombrepeli,:detalle,:protagonista)");

            $stmt->bindParam(':idgenero',$datosModel['idgenero'], PDO::PARAM_INT);
            $stmt->bindParam(':nombrepeli',$datosModel['nombrepeli'], PDO::PARAM_STR);
            $stmt->bindParam(':detalle',$datosModel['detalle'], PDO::PARAM_STR);
            $stmt->bindParam(':protagonista',$datosModel['protagonista'], PDO::PARAM_STR);

            if ($stmt->execute()) {
               return 'success';
            }else{
                return 'error';
            }
            $stmt->close();
       }


       


 #--------------------------------------------------------------------------
 #obtenet peliculas
  
      public function getPeliculasModel($tabla){
         $sql = Conexion::conectar()->prepare("SELECT * FROM peliculas pe JOIN generos ge ON    
            ge.idgenero = pe.idgenero");
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();

      }  

      

      #insertar peliculas# 
// -----------------------------------------------------
// -----------------------------------------------------
         public function registrarAlquilerModel($datosModel,$tabla){

            $stmt=Conexion::conectar()->prepare("UPDATE peliculas SET estado = 'ALQUILADA' WHERE idpelicula= :idpelicula ");
            $stmt->bindParam(':idpelicula',$datosModel['idpelicula'], PDO::PARAM_STR);
            $stmt->execute();

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idcliente,idpelicula,precio)VALUES(:idcliente,:idpelicula,:precio)");

            $stmt->bindParam(':idcliente',$datosModel['idcliente'], PDO::PARAM_INT);
            $stmt->bindParam(':idpelicula',$datosModel['idpelicula'], PDO::PARAM_STR);
            $stmt->bindParam(':precio',$datosModel['precio'], PDO::PARAM_STR);
           
            if ($stmt->execute()) {
               return 'success';
            }else{
                return 'error';
            }

            $stmt->close();
       }

        #--------------------------------------------------------------------------
 #obtenet alquiler de peliculas
  
      public function getAlquilerModel($tabla){
         $sql = Conexion::conectar()->prepare("SELECT cli.nombre,pe.nombrepeli,al.precio,al.fechaalquiler,al.idalquiler  FROM clientes cli JOIN alquileres al ON cli.idcliente=al.idcliente
             join peliculas pe ON pe.idpelicula= al.idpelicula");
        
         $sql->execute();
         return $sql->fetchAll();
         $sql->close();

      }  

       // obtener todos los clientes
       public function getClientesModel($tabla){
        $sql=Conexion::conectar()->prepare("SELECT * FROM clientes WHERE estado = 'ACTIVO'");
        $sql->execute();
        return $sql->fetchAll();

        $sql->close();
       }




      #insertar clientes# 
// -----------------------------------------------------
// -----------------------------------------------------
         public function registrarClientesModel($datosModel,$tabla){

           

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,apellido,telefono,direccion,dni)VALUES(:nombre,:apellido,:telefono,:direccion,:dni)");

            $stmt->bindParam(':nombre',$datosModel['nombre'], PDO::PARAM_INT);
            $stmt->bindParam(':apellido',$datosModel['apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':telefono',$datosModel['telefono'], PDO::PARAM_STR);
            $stmt->bindParam(':direccion',$datosModel['direccion'], PDO::PARAM_STR);
            $stmt->bindParam(':dni',$datosModel['dni'], PDO::PARAM_STR);
           
            if ($stmt->execute()) {
               return 'success';
            }else{
                return 'error';
            }

            $stmt->close();
       }

       // ==========================================================
       // editar usuarios
       // =============================================

       function editarUsuariosModel($datosModel,$tabla){
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idusuario = :id");
            $stmt->bindParam(':id',$datosModel, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
             $stmt->close();
    }

    // actualizar Usuarios
    function actualizarUsuariosModel($datosModel,$tabla){
      $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET nomusuario = :nomusuario,
       password = :password WHERE idusuario = :idusuario");

      $stmt->bindParam(':nomusuario',$datosModel['nomusuario'], PDO::PARAM_STR);
      $stmt->bindParam(':password',$datosModel['password'], PDO::PARAM_STR);
      $stmt->bindParam(':idusuario',$datosModel['idusuario'], PDO::PARAM_STR);
           
      if($stmt->execute()){

             return "success";
      }else{
    
       return  "error";
      }

      $stmt->close();
    }


      // ==========================================================
       // editar clientes
       // =============================================

       function editarClientesModel($datosModel,$tabla){
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idcliente = :id");
            $stmt->bindParam(':id',$datosModel, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch();
             $stmt->close();
    }
   
      // ==========================================================
       // actualizar clientes
       // =
    function actualizarClientesModel($datosModel,$tabla){
       $stmt=Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre,
       apellido = :apellido , telefono=:telefono,direccion=:direccion,dni=:dni WHERE idcliente = :idcliente");

      $stmt->bindParam(':nombre',$datosModel['nombre'], PDO::PARAM_STR);
      $stmt->bindParam(':apellido',$datosModel['apellido'], PDO::PARAM_STR);
      $stmt->bindParam(':telefono',$datosModel['telefono'], PDO::PARAM_STR);
      $stmt->bindParam(':direccion',$datosModel['direccion'], PDO::PARAM_STR);
      $stmt->bindParam(':dni',$datosModel['dni'], PDO::PARAM_STR);
      $stmt->bindParam(':idcliente',$datosModel['idcliente'], PDO::PARAM_STR);
           
      if($stmt->execute()){

             return "success";
      }else{
    
       return  "error";
      }

      $stmt->close();
    }

}


?>