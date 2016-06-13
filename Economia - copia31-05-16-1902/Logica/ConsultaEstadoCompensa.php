<?php
//session_start();
if(!isset($_SESSION)) 
{ 
  session_start(); 
}
include "../Conexion/Conexion.php";
$id = $_POST['nroform'];
$anio=$_POST['anioform']; 
$conexion=Conectarse();
//$queryC="SELECT a.nroproveedor,a.imprimio,b.razonsocial FROM acreenciasingestion a, usuarios b where (a.nroproveedor='".$id."') and(a.imprimio='NO') and(b.nroprov='".$id."') ORDER BY idacreenciasingestion ASC limit 1;";
$queryC="SELECT * FROM rescompensa  where (nroform='".$id."')and (anioform='".$anio."')  ORDER BY idres ASC limit 1;";
$rs =mysqli_query($conexion,$queryC);
$tot=mysqli_num_rows($rs);
 if ($tot!=0) {
 	$row=@mysqli_fetch_array($rs);
	$np=$row['nroprov'];$rz=$row['razonsocial'];$mr=$row['montoreclamado'];
	}
$_SESSION["nroform"]=$id;$_SESSION["anioform"]=$anio;
$_SESSION['np']=$np;$_SESSION["rz"]=$rz;
$_SESSION["mr"]=$mr;


//include("../views/frmCambiaEstado.php");
header("Location: ../views/frmCompletaCompensa.php");
mysqli_free_result($rs);
mysqli_close($conexion);


?>