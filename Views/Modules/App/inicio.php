
<style>
	#card{
		width: 200px;
		height: 120px;
	}
	.prin{
		border:1px solid #9F9999;
		padding:10px;
		
	}
	.jumbotron{
		height: 180px;
	}
</style>
<body style="background-image: url('assets/img/Optimized-fondo.jpg');">
	<div class="container" style="background-color: #fff; border-radius: 3px;">
		<br>
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-3">Video Club Seecorp</h1>
		    <p class="lead">desarrollado por Seecorp Desarrollos web.</p>
		  </div>

	   </div><br>
       <div class="prin">
       	
	   <div class="row">
	     <div class="col-md-12"> <h4 class="card-title">Totales de Clientes y Peliculas</h4></div>
		  <div class="col-md-4">
		  	 <img class="card-img-top" id="card" src="assets/img/carta.jpg" alt="Card image cap">
		  </div>

		  <div class="col-md-8">
		  	 <div class="alert alert-success" role="alert">

			 <strong>Clientes Activos :</strong> <?php $vistaUsuario = new MvcController();
	                                            $vistaUsuario->totalClientesController(); ?> 
	                                          
			</div>
		  	 <div class="alert alert-danger" role="alert">
			 <strong>Peliculas Alquiladas :</strong> <?php $vistaUsuario = new MvcController();
	                                            $vistaUsuario->totalPeliculasController(); ?> 
	                                           
			</div>


		  </div>
		  
	  </div>
     </div><br>
      </div>
    