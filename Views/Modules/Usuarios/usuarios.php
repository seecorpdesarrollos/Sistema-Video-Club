<div class="container">
 <div class="card">
	
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Listado de  Usuarios del Sistema</li>
  </ol><br>

<?php 
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'cambioUsuario') {
			echo '
			     <center><div class="alert alert-success alert-dismissible fade in" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					  <strong>Exitos!! </strong>  El Usuario  Fue Modificado Correctamente Al Sistama.
					</div>
				</center>';
		}
	}
?>
<?php 
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'ok') {
			echo '
			     <center><div class="alert alert-success alert-dismissible fade in" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					  <strong>Exitos!! </strong>  El Usuario Fue Agregado Correctamente Al Sistama.
					</div>
				</center>';
		}
	}

	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'error') {
			echo '
			     <center><div class="alert alert-danger alert-dismissible fade in" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					  <strong>Error !! </strong> Ha Ocurrido un Error Al Intentar Ingresar Al usuario Al Sistema.
					</div>
				</center>';
		}
	}
 ?>
	<table class="table table-striped">
		<thead class="thead-inverse">
			<tr>
				<th>Nombre de Usuario</th>
				<th>Contraseña de Usuario</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				$vistaUsuario = new MvcController();
				$vistaUsuario->getUsuariosController();
			 ?>
		</tbody>
	</table>
</div>
</div>