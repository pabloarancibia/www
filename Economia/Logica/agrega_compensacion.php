<?php
include "../Conexion/Conexion.php";
$conexion=Conectarse();
$idacompensa=0;
$id = $_POST['bsprov']; $fechacarga=date("Y-m-d"); 
$proceso = $_POST['pro'];
$sujetop= $_POST['bssujeto'];
$tr = $_POST['tributo'];
/* "1">PATENTE AUTOMOTOR</option>
 "2">  TASAS RETIBUTIVAS DE SERVICIOS</option>
 "3">  IMPUESTO INMOBILIARIO</option>
 "4">  TASA DE REGISTRO, INSPECCION Y SERVICIOS CONTRALOR</option>
"5">   IMPUESTO A LA PUBLICIDAD Y PROPAGANDA</option>*/
if($tr==1){$tributo="PATENTE AUTOMOTOR";}
if($tr==2){$tributo="TASAS RETRIBUTIVAS SERVICIOS";}
if($tr==3){$tributo="IMPUESTO INMOBILIARIO";}
if($tr==4){$tributo="T.REGISTRO,INSP.,CONTRALOR";}
if($tr==5){$tributo="IMP.PUBLICIDAD Y PROPAGANDA";}
$nroform=0;$anioform=0;
$importe=$_POST['monto'];$documento=$_POST['dcto'];
//VERIFICAMOS EL PROCESO
switch($proceso){
	case 'Registro':
	    $idacompensa=buscarId();
		$queryR="INSERT INTO acreenciacompensacion (idacompensa, provcom, sujetop, tributop, importep, fechacarga,imprimio,documento,nroform,anioform) 
		VALUES('".$idacompensa."','".$id."','".$sujetop."','".$tributo."','".$importe."','".$fechacarga."','NO','".$documento."','".$nroform."','".$anioform."');";
		$rr=mysqli_query($conexion,$queryR);mysqli_close($conexion);
	break;
	
	case 'Edicion':
	    $idacompensa=$_POST['idf'];
	    $queryE="UPDATE acreenciacompensacion 
	    SET sujetop='".$sujetop."', tributop='".$tributo."', importep='".$importe."', fechacarga='".$fechacarga."', documento='".$documento."' WHERE idacompensa = '".$idacompensa."' ;";
		mysqli_query($conexion,$queryE);mysqli_close($conexion);
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS
$conexion=Conectarse();
$queryC="SELECT * FROM acreenciacompensacion where (provcom='".$id."') and(imprimio='NO') and (nroform=0) ORDER BY idacompensa ASC;";

$registro = mysqli_query($conexion,$queryC);
//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
			    <th width="80">PROVEEDOR</th>
                <th width="150">SUJETO</th>
                <th width="150">TRIBUTO</th>
                <th width="150">IMPORTE $</th>
                <th width="150">DOCUMENTO</th>
                <th width="50">Opciones</th>
            </tr>';
	$tmontof=0;$tcont=0;
	while($registro2 = mysqli_fetch_array($registro)){
		echo '<tr>
		        <td>'.$registro2['provcom'].'</td>
				<td>'.$registro2['sujetop'].'</td>
				<td>'.$registro2['tributop'].'</td>
				<td>'.$registro2['importep'].'</td>
				<td>'.$registro2['documento'].'</td>
				<td><a href="javascript:editarCompensacion('.$registro2['idacompensa'].');" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i></a> <a href="javascript:eliminarCompensacion('.$registro2['idacompensa'].');" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a></td>
				</tr>';
				$tmontof=$tmontof+$registro2['importep'];
				$tcont++;
				
	}
echo '</table>';
echo '<table class="table table-striped table-condensed table-hover">
        	<tr> 
			<td><h4>CANTIDAD DE DOCUMENTOS :</h4></td><td align="center"><h4>'.$tcont.'</h4></td>
			<td><h4> TOTAL $:</h4></td><td align="center"><h4>'.$tmontof.'</h4></td>
			</tr>';
mysqli_close($conexion);

 function buscarId(){
	$query2 = "SELECT idacompensa FROM acreenciacompensacion ORDER BY idacompensa DESC LIMIT 1"; 
	$conexion2=Conectarse();$tot=0;
	$rs =mysqli_query($conexion2,$query2);
	$tot=mysqli_num_rows($rs);
	 if ($tot!=0) {
	  $row=@mysqli_fetch_array($rs);
		$idacompensa = $row['idacompensa']+ 1;
		  }else{$idacompensa=1;}
		mysqli_free_result($rs);	 mysqli_close($conexion2);
	 return $idacompensa;
 }



?>