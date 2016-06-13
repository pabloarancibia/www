<?php
if(!isset($_SESSION)) 
{ 
        session_start(); 
}

include "../Conexion/Conexion.php";
$conexion=Conectarse();
$idsolicitante=$_SESSION['secretaria'];
$idpedidomateriales=buscarIDPM();//buscar el correlativo
//echo "idmat:".$idpedidomateriales;
$nropedido=buscarIDDPM($idsolicitante);//buscar el nro;
$idpedido=$nropedido;
//echo "np:".$nropedido;
$aniopedido=date("Y");
//echo "anio:".$aniopedido;
$fechapedido=date("Y-m-d");
//echo "fec:".$fechapedido;
$estado="INGRESADO";
//echo "est:".$estado;

$totalped=buscarTP($nropedido,$idsolicitante);//traer el total;
//echo "total:".$totalped;
$totalletra=strtoupper($_POST['totalletra']);//traer escrito
//echo "letra:".$totalletra;
//usuario de la secretaria
//echo "soli:".$idsolicitante;

//echo "idpedido:".$idpedido;
$idsecre=$_POST['secret'];// traer secretaria
//echo "se:".$idsecre;
$idssecre=$_POST['subsecret'];//traer subsecretaria
//echo "ss:".$idssecre;
$iddg=$_POST['dirgral'];//traer direccion general
//echo "dg:".$iddg;
$destmat=strtoupper($_POST['destmat']);//traer el destino
//echo "destino:".$destmat;



//GRABAR EL PEDIDO
 //$iddetallepm=buscarId();
$queryR="INSERT INTO pedidomateriales (idpedidomateriales, nropedido, aniopedido, fechapedido, estado, totalped, totalletra, idsolicitante, idpedido, isecre, isubsecre, idg, destinomat) 
VALUES('".$idpedidomateriales."','".$nropedido."','".$aniopedido."','".$fechapedido."','".$estado."','".$totalped."','".$totalletra."','".$idsolicitante."','".$idpedido."','".$idsecre."','".$idssecre."','".$iddg."','".$destmat."');";
$rr=mysqli_query($conexion,$queryR);mysqli_close($conexion);
// aca va el redireccionamiento
?>
<script>
alert('PEDIDO DE MATERIALES GRABADO CORRECTAMENTE');
window.location.href='../views/frmPedidosMateriales.php';
</script>	
<?php

//--------------------------------------------------------------------
//id del pedido de materiales
 function buscarIDPM(){
	$query2 = "SELECT idpedidomateriales FROM pedidomateriales ORDER BY idpedidomateriales DESC LIMIT 1"; 
	$conexion2=Conectarse();$tot=0;
	$rs =mysqli_query($conexion2,$query2);
	$tot=mysqli_num_rows($rs);
	 if ($tot!=0) {
	  $row=@mysqli_fetch_array($rs);
		$idpedidomateriales = $row['idpedidomateriales']+ 1;
		  }else{$idpedidomateriales=1;}
		mysqli_free_result($rs);	 mysqli_close($conexion2);
	 return $idpedidomateriales;
 }

// id del detalle de pedido
 function buscarIDDPM($idsolicitante){
	$query2 = "SELECT idpedido FROM detallepedidomateriales where idsol='".$idsolicitante."' ORDER BY idpedido DESC LIMIT 1"; 
	$conexion2=Conectarse();$tot=0;
	$rs =mysqli_query($conexion2,$query2);
	$tot=mysqli_num_rows($rs);
	 if ($tot!=0) {
	  $row=@mysqli_fetch_array($rs);
		$id = $row['idpedido'];
		  }else{$id=1;}
		mysqli_free_result($rs);	 mysqli_close($conexion2);
	 return $id;
 }
 
// totalizar el pedido
 function buscarTP($nropedido,$idsolicitante){
	$query2 = "SELECT sum(importedetalle) as total FROM detallepedidomateriales where idpedido='".$nropedido."'and idsol='".$idsolicitante."' ;"; 
	$conexion2=Conectarse();$tot=0.0;
	$rs =mysqli_query($conexion2,$query2);
	$tot=mysqli_num_rows($rs);
	 if ($tot!=0) {
	  $row=@mysqli_fetch_array($rs);
		$totped = $row['total'];
		  }else{$totped=0;}
		mysqli_free_result($rs);	 mysqli_close($conexion2);
	 return $totped;
 } 



?>