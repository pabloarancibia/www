<?php
//session_start();
/*if(!isset($_SESSION)) 
{ 
        session_start(); 
}*/
include "../Conexion/Conexion.php";
$dni=$_POST['dni'];$existe=FALSE;
$existe=buscarUser($dni);
//buscar el dni primero

  if($existe==TRUE)
	{
		 $respuesta = "YA EXISTE USUARIO-VERIFIQUE LOS DATOS INGRESADOS";
         include("../views/frmAltaUser.php"); 
         // $flag=false;
         exit;
          }
  else { //no existe el usuario
        $apynom=strtoupper($_POST['apynom']);
        $level=$_POST['nivel'];
        if($level==1){$nivel=0;}if($level==2){$nivel=1;}
        if($level==3){$nivel=2;}
		//if($level==99){$nivel="ADMINISTRADOR";} ver para activar un administrador
        $pass=$_POST['clave'];$estado="A";$clave=md5($pass);
        $idusersistema=buscarID();
	    $conexion=Conectarse();
	    $query = "INSERT INTO usersistema (idusersistema, apynom, dni, clave, nivel, estado) VALUES('".$idusersistema."','".$apynom."','".$dni."','".$clave."','".$nivel."','".$estado."');";
        $rs=mysqli_query($conexion,$query)or die(include("../views/frmAltaUser.php"));		
		$respuesta = "CARGA DE DATOS CORRECTA";
        include("../views/frmAltaUser.php");
		 //$flag=false;
		 mysqli_close($conexion);
    	 }		

/////////////////////////////////////////////
function buscarUser($dni) {
        $respu = "";
        //$rs = null;
		$query = "SELECT dni FROM usersistema where dni='".$dni."'";
	   $conexion2=Conectarse();
       $rs =mysqli_query($conexion2,$query);
	   $tot=mysqli_num_rows($rs);
        if ($tot!=0) {
			$respu =TRUE;
			mysqli_free_result($rs);
         }else{$respu=FALSE;}
        return $respu;
		mysqli_free_result($rs);
		mysqli_close($conexion2);	
    }
 
/////////////////////////////////////////
function buscarID(){
	$queryID = "SELECT idusersistema FROM usersistema ORDER BY idusersistema DESC LIMIT 1"; 
	$conexion=Conectarse();
	$rs =mysqli_query($conexion,$queryID);
	$tot=mysqli_num_rows($rs);
    if ($tot!=0) {
    	$row=@mysqli_fetch_array($rs);
        $id = $row['idusersistema']+ 1;
	   }else{$id=1;}
	return $id;
	mysqli_free_result($rs);
	 mysqli_close($conexion);
	
}
?>