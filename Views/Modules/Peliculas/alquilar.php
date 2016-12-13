<?php 
	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');

 ?>
 
  <div class="container">
   <ol class="breadcrumb">
    <li class="breadcrumb-item active">Alquilar Peliculas</li>
  </ol>


<form method="post" id="form">

  <div class="col-md-6">
      <label class="lab" for="genero">Lista de Clientes</label><br>
      <select class="form-control chosen-select" id="cliente" name="cliente">
        <option value="0"  required="" >SELECCIONA UN CLIENTE</option>
        <?php             
          $consulta = $conexion->query("SELECT * FROM clientes order by nombre asc");
          while ($fila=$consulta->fetch(PDO::FETCH_OBJ)) {                    
            echo '<option value="'.$fila->idcliente.'">'.ucwords($fila->nombre). '<strong> '.ucwords($fila->apellido).'  ' . ' - D.N.I- ' .$fila->dni. '</option> ';
      }?>
    </select>
  </div><br>

   <div class="col-md-6">
      <label class="lab" for="genero">Lista de Peliculas</label><br>
      <select class="form-control chosen-select" id="pelicula" name="pelicula">
        <option value="0"  required="" >SELECCIONA UNA PELÍCULA</option>
        <?php             
          $consulta = $conexion->query("SELECT * FROM peliculas WHERE estado = 'disponible' order by nombrepeli asc");
          while ($fila=$consulta->fetch(PDO::FETCH_OBJ)) {                    
            echo '<option value="'.$fila->idpelicula.'">'.ucwords($fila->nombrepeli).'</option> ';
      }?>
    </select>
  </div>
<br>
  <?php $pre=$conexion->query('SELECT DISTINCT precio FROM peliculas');?>
  <?php foreach ($pre as $key ): ?>
     <div class="col-md-6">
      <label class="lab" for="precio">Precio del Alquiler</label><br>
    <div class="form-group"> 
      <input type="text" class="form-control" name="precio" value="<?php echo $key['precio']; ?>">
  <?php endforeach ?>
   </div>
   </div>


   <div class="col-md-6">
    <div class="form-group">
      <label for="fechaalquiler"><i class="fa fa-unlock-alt"> </i> Fecha del Alquiler</label>
      <input type="text" class="form-control" name="fechaalquiler" value="<?php echo date('d-m-y'); ?>" disabled="solo lectura">
    </div>
   </div>


   <div class="col-md-12">
    <div class="form-group"> 
      <input type="submit" name="alquilar" class="btn btn-success" value="Alquilar Película">
    </div>
   </div>
 

</form>
</div><br>
</div>  

<?php 
$regisPeli= new MvcController();
$regisPeli->registroAquilerController();
ob_end_flush();
 ?>

