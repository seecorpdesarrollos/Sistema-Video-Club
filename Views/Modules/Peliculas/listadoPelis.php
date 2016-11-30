
<div class="container">
<div class="card">

	<?php 
		if(isset($_GET['action'])) {
			if($_GET['action'] == 'okpelis'){
			
				echo ' <center><div class="alert alert-success alert-dismissible fade in" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					  <strong>Exitos!! </strong> La Pelicula fue Agregada  Correctamente Al Sistama.
					</div>
				</center>';
			}
		}
	 ?>
<ol class="breadcrumb">
  <li class="breadcrumb-item active">Listado Peliculas</li>
</ol>
 <form class="form-inline float-xs-right" method="post" action="index.php?action=buscar">
    <input class="form-control" type="text" placeholder="Search Films" name="buscar" required="" autofocus="">
    <button name="submit" class="btn btn-outline-success" id="buscar" type="submit">Buscar Películas</button>
  </form><br><br>
	 
 <table class="table table-striped">
  	<thead class="thead-inverse">
			<tr>
				<th>Nombre de la Pelicula</th>
				<th width="39">Género </th>
				<th>Detalles</th>
				<th>Protagonostas</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				$vistaUsuario = new MvcController();
				$vistaUsuario->getPeliculasController();
			 ?>
		</tbody>
	</table>

</div>	
</div>
