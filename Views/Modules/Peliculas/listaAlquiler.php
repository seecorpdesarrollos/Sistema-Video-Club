<?php 

	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');
  $sql=$conexion->prepare("SELECT SUM(precio) AS TOTAL FROM alquileres ");
  $sql->execute();
  foreach ($sql as $key) {
   $result= $key['TOTAL'];
  }

  if(isset($_POST['venta'])) {
           $sql=$conexion->prepare("INSERT INTO caja (idcliente,idpelicula,monto)
            SELECT al.idcliente,al.idpelicula,al.precio
            FROM alquileres al ");
           $sql->execute();
            $sql = $conexion->prepare("DELETE FROM alquileres");
            $sql->execute();
            header('location:index.php?action=alquilar');
       } 
 ?>


<div class="container">
  <?php 
    if(isset($_GET['action'])) {
      if($_GET['action'] == 'okalquiler'){
      
        echo ' <center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong> La Pelicula fue Alquilada  Correctamente Al Cliente.
          </div>
        </center>';
      }
    }
   ?>
   <ol class="breadcrumb">
    <li class="breadcrumb-item active">Lista de Alquilar Peliculas</li>
  </ol><br>
	
  <table class="table table-striped">
  	<thead>
  		<tr>
  			<th>Cliente</th>
  			<th>Pelicula Alquilada</th>
  			<th>$ Total</th>
  			<th>Fecha de Alquiler</th>
  		</tr>
  	</thead>
  	<?php $alquiler= new MvcController();
  	      $alquiler->getAlquilerController(); ?>
          <center>
            
          <div style="background: #CC2428; color: #fff; border-radius: 7px;
          " >TOTAL A PAGAR POR EL  ALQUILER DE PELÍCULAS <?php echo '<h3> $' .$result; ?></div>
          </center>
  </table>
</div>
  <div class="container">
  <?php 

  $sql=$conexion->prepare("SELECT * FROM alquileres ");
  $sql->execute();
   ?>
 <?php foreach ($sql as $key) :?>

    <div class="row flex-items-xs-right">
  <form method="post" id="add"> 

        <input type="hidden" value="<?php echo $key["idcliente"];?>" name="idcliente[]">
        <input type="hidden" value="<?php echo $key["idpelicula"];?>" name="idpelicula[]">
        <input type="hidden" value="<?php echo $key["precio"];?>" name="monto[]">

  <?php endforeach; ?>  
      <input type="submit" class="btn btn-primary" name="venta" value="$ Finalizar Venta">
    </div>
  </form>
</div>
