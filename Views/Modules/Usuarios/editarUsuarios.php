
<div class="container">
	
 <ol class="breadcrumb">
    <li class="breadcrumb-item active">Editar Usuarios del Sistema</li>
  </ol><br>
	<form method="post">
      <div class="row">

      <?php 
      	$editarUsuarios = new MvcController();
      	$editarUsuarios->editarUsuariosController();
      	$editarUsuarios->actualizarUsuarios();

       ?>
      </div>
    </form>
</div>
