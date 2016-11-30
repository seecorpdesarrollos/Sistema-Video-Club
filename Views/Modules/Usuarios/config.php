<center><h1>Agregar Usuario al Sistema</h1></center><br>
<div class="container">

<form method="post">
<div class="row">
	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="nomusuario"><i class="fa fa-user"> </i> Nombre del Usuario</label>
	    <input type="text" class="form-control" name="nomusuario" placeholder="Example input">
	  </div>
	 </div>

	 <div class="col-md-6">
	  <div class="form-group">
	    <label for="password"><i class="fa fa-unlock-alt"> </i> Contraseña del Usuario</label>
	    <input type="password" class="form-control" name="password" placeholder="Example input">
	  </div>
	 </div>

	 <div class="col-md-12">
	  <div class="form-group"> 
	    <input type="submit" class="form-control btn btn-success" value="Agregar Usuario Nuevo">
	  </div>
	 </div>
 

</div>	
</form>
</div><br>
<?php 

	$registro = new MvcController();
	$registro->registroUsuariosController();
	
 ?>