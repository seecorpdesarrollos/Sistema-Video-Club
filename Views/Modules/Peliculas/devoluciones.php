 <?php 
	$conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');

	$sql = $conexion->prepare("SELECT * FROM caja ca JOIN clientes cli ON ca.idcliente= cli.idcliente JOIN peliculas pe ON pe.idpelicula=ca.idpelicula ");
	$sql->execute();
	 $result=  $sql->fetchAll();
     

 ?>
 <div class="container">
   <ol class="breadcrumb">
    <li class="breadcrumb-item active">Devoluciones de Peliculas</li>
  </ol>

  <table class="table table-striped">
  	<thead  class="thead-inverse">
  		<tr>
  			<th>Cliente</th>
  			<th>Pelicula Alquilada</th>
  			<th>$ Total</th>
  			<th>Fecha de Alquiler</th>
        <th class="text-center" width="260">Devolución de Películas</th>
  		</tr>
  	</thead>
  	<tbody>
  	<?php foreach ($result as $key): ?>
  		
  		<tr>
  			<td><?php echo $key['nombre']?></td>
  			<td><?php echo $key['nombrepeli']?></td>
        <td><?php echo $key['precio']?></td>
        <td><?php echo $key['fechaalquiler']?></td>    
  			<td> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <a  href="index.php?action=devol&idpelicula=<?php echo $key['idpelicula'] ?>"><i class="fa fa-edit btn btn-primary btn-sm"></i>
          </a>
        </td>
    </tr>
  	</tbody>
  	<?php endforeach ?>
  </table>

</div>