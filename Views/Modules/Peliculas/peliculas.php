<?php 
	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');
 ?>
<div class="container">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active">Agregar Peliculas Nuevas</li>
  </ol>
<form method="post">
<div class="row">
	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="nombrepeli"><i class="fa fa-user"> </i> Nombre de la Película</label>
	    <input type="text" class="form-control" name="nombrepeli" placeholder="Nombre de la Película" required="">
	  </div>
	 </div>

	 <div class="col-md-6">
    <label class="lab" for="genero">Genero de Peliculas</label><br>
	<select class="form-control chosen-select" name="idgenero" required="">
        <option value="0"  required="" >SELECCIONA UN GÉNERO</option>
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
	    <input type="text" class="form-control" name="protagonista" placeholder="Protagonista de la Pelicula" required="">
	  </div>
	 </div>


	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="detalle"><i class="fa fa-unlock-alt"> </i> Trama de la Pelicula</label>
         <textarea class="form-control" name="detalle"  rows="3" placeholder="Trama de la pelicula" required=""></textarea>
	  </div>
	 </div>



	 <div class="col-md-12">
	  <div class="form-group"> 
	    <input type="submit" class="form-control btn btn-success" value="Agregar Película Nueva">
	  </div>
	 </div>
 

</div>	
</form>
</div><br>
<?php 
$regisPeli= new MvcController();
$regisPeli->registroPeliculasController();
ob_end_flush();
 ?>