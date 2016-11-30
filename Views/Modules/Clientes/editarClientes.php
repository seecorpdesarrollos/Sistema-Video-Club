
	<div class="container">
  
  
	   <ol class="breadcrumb">
	    <li class="breadcrumb-item active">Editar Clientes</li>
	  </ol>
   
		<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Haga Click Para Editar al Cliente Seleccionado.
</button>


<?php
 $cli=new MvcController();
 $cli->editarClientesController();  
 $cli->actualizarClientesController();  
?>	
</div>

