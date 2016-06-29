<?php 
include("conexion.php");

if($_GET['action'] == 'listar')
{
	// valores recibidos por POST
	$vcuit   = $_POST['cuit'];
	
	//query para q traiga todos
	$sql = "SELECT * FROM proveedores";
	
	// Vericamos si hay algun filtro
	$sql .= ($vcuit != '')      ? " WHERE cuit LIKE '%$vcuit%'" : "";

	
	
	
}
?>