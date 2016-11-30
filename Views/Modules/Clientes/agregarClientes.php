	<div class="container">
   <?php 
    if(isset($_GET['action'])) {
      if($_GET['action'] == 'okclientes'){
      
        echo ' <center><div class="alert alert-success alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitos!! </strong> El Cliente fue agragado Satifactoriamente al sistema.
          </div>
        </center>';
      }
    }
   ?>
	   <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Agregar Clientes</li>
	  </ol>
   
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Agregar Clientes Nuevos
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
       <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Agregar Nuevos Clientes.</li>
	  </ol>
   
      </div>
      <div class="modal-body">
        <!-- body del  modal formulario -->
		           
		<form method="post">
		<div class="row">
			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="nombre"><i class="fa fa-user"> </i> Nombre del Cliente</label>
			    <input type="text" class="form-control" name="nombre" placeholder="Nombre del Cliente">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="apellido"><i class="fa fa-unlock-alt"> </i> Apellido del Cliente</label>
			    <input type="text" class="form-control" name="apellido" placeholder="Apellido del Cliente" required="">
			  </div>
			 </div>

			 <div class="col-md-6">
			  <div class="form-group">
			    <label for="telefono"><i class="fa fa-user"> </i> Teléfono del Cliente</label>
			    <input type="text" class="form-control" name="telefono" placeholder="telefono del Cliente" required="">
			  </div>
			 </div>
            <div class="col-md-6">
			  <div class="form-group">
			    <label for="direccion"><i class="fa fa-user"> </i> Dirección del Cliente</label>
			    <input type="text" class="form-control" name="direccion" placeholder="direccion del Cliente" required="">
			  </div>
			 </div>
		
            <div class="col-md-6  offset-md-3">
			  <div class="form-group  ">
			    <label for="dni" class="text-center"><i class="fa fa-user"> </i> D.n.i del Cliente</label>
			    <input type="text" class="form-control" name="dni" placeholder="dni del Cliente" required="">
			  </div>
			 </div>
   

			 <div class="col-md-12">
			  <div class="form-group"> 
			    <input type="submit" name="agregar" class="form-control btn btn-success" value="Agregar Cliente Nuevo">
			  </div>
			 </div>
		 

		</form>
        <!-- Fin del formulario -->
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-danger" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<?php
 $cli=new MvcController();
 $cli->registrarClientesController();    
?>	

















   </div>