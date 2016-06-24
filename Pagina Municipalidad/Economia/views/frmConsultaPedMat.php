<?php
session_start();
$_SESSION["secretaria"];$_SESSION["nivel"];
include "../Conexion/Conexion.php";
$conexion=Conectarse();
$nsec=$_SESSION["secretaria"];
$nivel=$_SESSION["nivel"];
switch ($nivel) {
  case 1:
  case 2:
  case 11:
     $sqlnrop="select * from pedidomateriales where idsolicitante='".$nsec."' order by isecre asc, idpedidomateriales desc  ;";
     break;
  case 10:
     $sqlnrop="select *  from pedidomateriales where (estado='INGRESADO') or (estado='AUTORIZADO') order by isecre asc, idpedidomateriales desc  ;";
     break;
  case 12:
     $sqlnrop="select *  from pedidomateriales where (estado='INGRESADO') or (estado='AUTORIZADO') order by isecre asc, idpedidomateriales desc  ;";
     break;   
  case 99:
     $sqlnrop="select * from pedidomateriales order by isecre asc, idpedidomateriales desc  ;";
     break;   
   

}
//$sqlnrop="select * from pedidomateriales where idsolicitante='".$nsec."'
//order by aniopedido desc, nropedido desc ;";
$resu=mysqli_query($conexion,$sqlnrop);
$row=mysqli_num_rows($resu);
if($row>0)
  {
	echo "<input type='button' name='imprimir' value='IMPRIMIR'  onClick='window.print()' style='margin:0px auto; display:block';/>";
    echo "<br></br>";
    echo "<input type='button' align='center' name='salir' value='Salir' onClick='history.back()' style='margin:0px auto; display:block';/>";
	echo "<br></br>";
	echo "<table width='100%'  cellspacing='0' cellpadding='0' style='font-size:15px' bgcolor='FDFEFE' border='1' align='center'>";
	echo "<caption>CONSULTA DE ESTADO DE PEDIDOS CARGADOS</caption>";
  echo "<tr bgcolor='#CCCCCC'>";
  echo "<td><b>Sec</b></td>";
  echo "<td><b>Nro</b></td>";
	echo "<td><b>Año</b></td>";
	echo "<td><b>Uso del Material/Servicio</b></td>";
	echo "<td><b>Total $</b></td>";
	echo "<td><b>Estado</b></td>";
	
	 echo "</tr>";
    while ($row = mysqli_fetch_array($resu)){
      echo "<tr>";
      echo "<td>".$row['isecre']."</td>";
      echo "<td>".$row['nropedido']."</td>";
	    echo "<td>".$row['aniopedido']."</td>";
      echo "<td>".$row['destinomat']."</td>";
	    echo "<td>".$row['totalped']."</td>";
	    echo "<td>".$row['estado']."</td>";
	    echo "</tr>";	
       }
	  
     echo "</table>";
	
   $respuesta="";
} else{
    $respuesta="NO HAY PEDIDOS EFECTUADOS";
    echo "<table width='100%'  cellspacing='0' cellpadding='0' style='font-size:20px' bgcolor='FDFEFE' border='1' align='center'>";
    echo "<caption>DATOS DEL PEDIDO</caption>";
    echo "<tr bgcolor='#CCCCCC'>";
    echo "<td align='center'><b>Respuesta del Sistema</b></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>&nbsp;</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td align='center'>".$respuesta."</td>";
    echo "</tr>";  echo "</table>";
    echo "<br></br>";
    echo "<div align='center'><input class='btn btn-primary' type='button' value='Salir' onclick='history.back()'/></div>";
}     
 ?>