<?php
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel" );
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header("content-disposition: attachment;filename=Monto-a-compensar.xls" );
?>
<HTML LANG="es">
<TITLE>::. Exportacion de Datos .::</TITLE>
</head>
<body>
<?php
require("../Conexion/Conexion.php");
$conexion=Conectarse();
$sql="select sum(b.importep) as mf, b.provcom, ac.razonsocial, b.fechacarga from acreenciacompensacion b, acreedoreconomia ac where (b.provcom=ac.nroprov)  group by b.provcom order by mf desc ;";
$resultado = mysqli_query ($conexion,$sql);

?>

<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>PROVEEDOR</TD>
<TD>RAZON SOCIAL</TD>
<TD>MONTO</TD>
<TD>FECHA DE CARGA</TD>
</TR>
<?php
//Proveedor Razon Social C.U.I.T Apellido Nombre Domicilio Localidad Provincia Tel.1 Email
while($row = mysqli_fetch_array($resultado)) {
printf("<tr>
<td>%d</td>
<td>&nbsp;%s&nbsp;</td>
<td>%01.2f</td>
<td>&nbsp;%s&nbsp;</td>
</tr>", $row["provcom"],$row["razonsocial"],$row["mf"],$row["fechacarga"]);
}
mysqli_free_result($resultado);
mysqli_close($conexion); //Cierras la Conexión
?>
</table>
</body>
</html>