
	<div class="container" ng-controller="listadoCtrl">
 <?php 
    if(isset($_GET['action'])) {
      if($_GET['action'] == 'cambioClientes'){
      
        echo ' <center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong> El Cliente fue Editado Satisfactoriamente al sistema.
          </div>
        </center>';
      }
    }
   ?>

   <?php 
    if(isset($_GET['action'])) {
      if($_GET['action'] == 'okModiClientes'){
      
        echo ' <center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong> El Cliente fue Agregado Exitosamente  al sistema.
          </div>
        </center>';
      }
    }
   ?>
  <div class="card">
	   <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Listado de Clientes</li>
	  </ol>
 <form class="form-inline float-xs-right" method="post" action="index.php?action=buscarClientes">
    <input class="form-control" ng-model="busqueda" type="text" placeholder="POR DNI O APELLIDO" name="buscar" required="" autofocus="" width="900">
    <button name="submit" class="btn btn-outline-success" id="buscar" type="submit">Buscar Clientes</button>
  </form><br><br>

  <table class="table table-striped">
  	<thead class="thead-inverse">
  		<tr>
  			<th>NOMBRE</th>
  			<th>APELLIDO</th>
  			<th>TELÉFONO</th>
  			<th>DIRECCION</th>
        <th>D.N.I</th>
        <th>ESTADO</th>
  			<th>ACCIONES</th>
  		</tr>
  		<tbody {{  |filter:busqueda}}>
  			<?php $cliente= new MvcController();
  			      $cliente->getClientesController();
  		     ?>
  		</tbody>
  	</thead>
  </table>
  </div>
  </div>