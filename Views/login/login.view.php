<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
	<title>Login Sistema Video Club</title>
</head>
<style>
	h1,label{
		
		text-align: center;
	}
	.conta{
		width: 700px;
		margin:auto;
		border: 5px solid #c9c9c9;
		padding: 30px 50px 60px;
		background: #BD4C3D;
		border-radius: 7px;
	}
	body{
	background-image: url('../../assets/img/Optimized-logins-compressor.jpg');
	opacity: 0.9;
	}
	.error{
		color: #fff;
	}
	.enviar{
		background: #36D05E;
		color: #fff;
		border-radius:8px;
		height: 50px;
	}
	
</style>
<body><br>
<br>
<br>
    <div class="conta">
       <h1>Bienvenido Video Club SeecorpDesarrollos</h1>
		<form class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
	  <div class="form-group">
		 <i class="fa fa-user"></i> <label for="nomusuario"> Nombre del Usuario</label>	    
		<input type="text" name="nomusuario" class="form-control" placeholder="Nombre Usuario ">
	  </div>
	  <div class="form-group">
	      <i class="fa fa-unlock-alt"></i> <label for="password"> Contraseña del  Usuario</label> 
		<input type="password" name="password" class="form-control" placeholder="Contraseña Usuario">
	  </div><br>


       <?php  if(!isset($_SESSION['nomusuario'])){
                 require 'btn.php'; }?>
             <?php if (!empty($enviar)): ?>
                 <div class="enviar">
                     <?php echo $enviar;  ?>
                 </div>
              <?php echo $enviado; ?> 
            <?php endif; ?>
            <?php if(!empty($error)): ?>
                <div class="error">                
                     <?php echo $error ?>
               </div>
            <?php endif; ?>
		</form>
    </div>
</body>
</html>