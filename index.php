<?php session_start();

if (!isset($_SESSION['nomusuario'])) {
  	header('location:Views/login/login.php');	
}else{

require_once "Model/enlaces.php";
require_once "Model/model.php";
require_once "Controller/controller.php";

$mvc = new MvcController();
$mvc -> plantilla();
}







 ?>