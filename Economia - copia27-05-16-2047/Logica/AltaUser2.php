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

  if($existe==FALSE)
	{
		 $respuesta = "NO EXISTE USUARIO-VERIFIQUE LOS DATOS INGRESADOS";
         include("../views/frmAltaUser2.php"); 
         // $flag=false;
         exit;
          }
  else { //no existe el usuario
        $level=$_POST['nivel'];
        if($level==1){$nivel=0;}if($level==2){$nivel=1;}
        if($level==3){$nivel=2;}
		//if($level==99){$nivel="ADMINISTRADOR";} ver para activar un administrador
        $conexion=Conectarse();
	    $query = "UPDATE usersistema SET nivel='".$nivel."' where dni='".$dni."';";
        $rs=mysqli_query($conexion,$query)or die(include("../views/frmAltaUser2.php"));		
		$respuesta = "MODIFICACION CORRECTA";
        include("../views/frmAltaUser2.php");
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
 
?>