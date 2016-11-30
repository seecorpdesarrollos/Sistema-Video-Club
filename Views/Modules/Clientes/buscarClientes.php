<?php 

 $conexion = new PDO('mysql:host=localhost;dbname=videoclub','root','chavalote');
	$conexion->exec('SET CHARACTER SET utf8');
	if (isset($_POST['submit'])) {
		$buscar = $_POST['buscar'];

		$sql = $conexion->prepare("SELECT * FROM clientes WHERE dni LIKE :dni OR apellido LIKE :apellido");
		$resultado = $sql->execute(array(':dni'=> "%$buscar%",
			                              ':apellido'=>"%$buscar%"));
		$resultado = $sql->fetchAll(PDO::FETCH_OBJ);
	if (empty($resultado)) {
		$titulo = 'No se encontraron Clientes  : ' .$buscar;
	} else {
		$titulo = 'El Clientes Buscado es : ' . $buscar;
	}
	
}

 ?>

<div class="container">
<ol class="breadcrumb">
	<h1><li class="breadcrumb-item active"> <?php echo $titulo ;?></li> </h1>
</ol>	

 	


<table class="table table-bordered">
<thead class="font">
	<th>NOMBRE</th>
	<th>APELLIDO</th>
	<th>TELÉFONO</th>
	<th>DIRECCIÓN</th>
	<th>D.N.I</th>
	<th>ESTADO</th>
	<th>VOLVER AL LISTADO</th>
</thead>
<?php foreach($resultado as $resultados): ?>
	
<tbody>
	<td><?php echo $resultados->nombre; ?></td>
	<td><?php echo $resultados->apellido; ?></td>
	<td><?php echo $resultados->telefono; ?></td>
	<td><?php echo $resultados->direccion; ?></td>
	<td><?php echo $resultados->dni; ?></td>
	<td class=" alert-danger"><?php echo $resultados->estado; ?></td>
	<td>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
		<a href="index.php?action=listadoClientes"><i class="fa fa-edit btn btn-primary "></i>
		</a>
		<a href="index.php?action=alta&idcliente=<?php echo $resultados->idcliente; ?>"><i class="fa fa-edit btn btn-warning "></i>
		</a>
   </td>
</tbody>
<?php endforeach; ?>
</table>
</div>