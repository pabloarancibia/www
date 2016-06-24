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
  else { 
        $level=$_POST['nivel'];
        switch ($level) {
          case '0':
            {$nivel=0;$secretaria=0;}
            break;
          case '1':
            {$nivel=1;$secretaria=1;}
            break;
          case '2':
            {$nivel=2;$secretaria=2;}
            break;
          case '3':
            {$nivel=2;$secretaria=3;}
            break;
          case '4':
            {$nivel=2;$secretaria=4;}
            break;
          case '5':
            {$nivel=2;$secretaria=5;}
            break;
          case '6':
            {$nivel=2;$secretaria=6;}
            break;
          case '7':
            {$nivel=2;$secretaria=7;}
            break;
          case '8':
            {$nivel=2;$secretaria=8;}
            break;
          case '9':
            {$nivel=2;$secretaria=9;}
            break;
          case '10':
            {$nivel=10;$secretaria=1;}
            break;
          case '11':
            {$nivel=11;$secretaria=1;}
            break;
          /* case '12':
            {$nivel=12;$secretaria=1;} 
            break;
          case '99':
            {$nivel=99;$secretaria=0;}
            break;
            */
            }
        $conexion=Conectarse();
	    $query = "UPDATE usersistema SET nivel='".$nivel."',secretaria='".$secretaria."' where dni='".$dni."';";
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