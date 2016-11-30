<?php 
	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');

	 if (!isset($_POST['editar_peli'])){
		$idpelicula= $_GET['idpelicula'];
	    $sql=$conexion->prepare("SELECT * FROM peliculas pe
	     JOIN generos ge ON pe.idgenero=ge.idgenero
	     WHERE idpelicula = :idpelicula");
	    $sql->execute(array(':idpelicula'=> $idpelicula));
	    $result=$sql->fetchAll(PDO::FETCH_OBJ);
	 }else{
	 	$idpelicula=$_POST['idpelicula'];
	 	$idgenero= $_POST['idgenero'];
	 	$nombrepeli= $_POST['nombrepeli'];
	 	$detalle= $_POST['detalle'];
	 	$protagonista= $_POST['protagonista'];

	 			
	$update = $conexion->prepare( "UPDATE peliculas SET   idgenero = :idgenero, nombrepeli = :nombrepeli , detalle = :detalle, protagonista = :protagonista WHERE idpelicula = :idpelicula");
	$update->execute(array(':idpelicula' =>$idpelicula,
		                   ':idgenero' =>$idgenero,
		                   ':nombrepeli' =>$nombrepeli,
		                   ':detalle' =>$detalle,
		                   ':protagonista'=>$protagonista
		                    ));

		
	header('location:index.php?action=listadoPelis');
	 }
 ?>
<div class="container">
   <ol class="breadcrumb">
    <li class="breadcrumb-item active">Editar Peliculas </li>
  </ol>
<form method="post">
<?php foreach ($result as $post): ?>
	

<div class="row">
	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="nombrepeli"><i class="fa fa-user"> </i> Nombre de la Película</label>
	    <input type="text" class="form-control" name="nombrepeli" value="<?php echo $post->nombrepeli ?>" required="">
	  </div>
	 </div>
 <input type="hidden" class="form-control" name="idpelicula" value="<?php echo $post->idpelicula?>">
	 <div class="col-md-6">
    <label class="lab" for="genero">Genero de Peliculas</label><br>
	<select class="form-control chosen-select" name="idgenero" required="">
        <option value="<?php echo $post->nomgenero?>"  required="" ><?php echo $post->nomgenero?></option>
        <?php							
          $consulta = $conexion->query("SELECT * FROM generos order by nomgenero asc");
          while ($fila=$consulta->fetch(PDO::FETCH_OBJ)) {										
            echo '<option value="'.$fila->idgenero.'">'.ucwords($fila->nomgenero).'</option> ';
			}?>
    </select>
  </div>


	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="protagonista"><i class="fa fa-unlock-alt"> </i> Protagonista de la pelicula</label>
	    <input type="text" class="form-control" name="protagonista"  value="<?php echo $post->protagonista ?>" required="">
	  </div>
	 </div>


	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="detalle"><i class="fa fa-unlock-alt"> </i> Trama de la Pelicula</label>
         <textarea class="form-control" name="detalle"  rows="3"  required=""> <?php echo $post->detalle ?></textarea>
	  </div>
	 </div>

<?php endforeach; ?>


	 <div class="col-md-12">
	  <div class="form-group"> 
	    <input type="submit" name="editar_peli" class="form-control btn btn-success" value="Agregar Usuario Nuevo">
	  </div>
	 </div>
 
</div>	
</form>
</div><br>
<?php 

ob_end_flush();
 ?>