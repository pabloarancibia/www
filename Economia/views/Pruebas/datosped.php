<?php
include ("../Conexion/Conexion.php");
$conn=Conectarse();
$Accion=$_REQUEST['Accion'];
if(is_callable($Accion)){
	$Accion();
}

function GetSecretaria(){
	header('Content-Type: application/json');
	$Secretarias=array();
	$Consulta=mysqli_query($conn;"select * from secretarias order by sec asc;");
    while($fila=mysqli_fetch_assoc($Consulta)){
		$Secretarias[]=$fila;
	}	
	echo json_encode($Secretarias);
	
}

function GetSubSecretaria(){
	header('Content-Type: application/json');
	$GetSubSecretaria=array();
	$Consulta=mysqli_query($conn;"select * from subsecretarias where isec='".$_REQUEST['sec']."'");
	 while($fila=mysqli_fetch_assoc($Consulta)){
		$SubSecretarias[]=$fila;
	}	
	echo json_encode($SubSecretarias);
	
}

function GetDirGeneral(){
	header('Content-Type: application/json');
	$DirGeneral=array();
	$Consulta=mysqli_query($conn;"select * from dirgenerales where issec='".$_REQUEST['subsec']."'");
	 while($fila=mysqli_fetch_assoc($Consulta)){
		$DirGeneral[]=$fila;
	}	
	echo json_encode($DirGeneral);
	
}


?>