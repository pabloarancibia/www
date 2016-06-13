<?php
//Exportar datos de php a Excel
header("Content-Type: application/vnd.ms-excel" );
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header("content-disposition: attachment;filename=Proveedores.xls" );
?>
<HTML LANG="es">
<TITLE>::. Exportacion de Datos .::</TITLE>
</head>
<body>
<?php
require("../Conexion/Conexion.php");
$conexion=Conectarse();
$sql="SELECT * FROM acreedoreconomia where (razonsocial <> '') || (apellido <> '') ORDER BY  razonsocial ASC;";
$resultado = mysqli_query ($conexion,$sql);

?>

<TABLE BORDER=1 align="center" CELLPADDING=1 CELLSPACING=1>
<TR>
<TD>PROVEEDOR</TD>
<TD>RAZON SOCIAL</TD>
<TD>C.U.I.T</TD><TD>APELLIDO</TD>
<TD>NOMBRE</TD><TD>DOMICILIO</TD>
<TD>LOCALIDAD</TD><TD>PROVINCIA</TD>
<TD>TELEFONO</TD><TD>EMAIL</TD>
</TR>
<?php
//Proveedor Razon Social C.U.I.T Apellido Nombre Domicilio Localidad Provincia Tel.1 Email
while($row = mysqli_fetch_array($resultado)) {
printf("<tr>
<td>%d</td>
<td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td>
<td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp;</td>
</tr>", $row["nroprov"],$row["razonsocial"],$row["cuit"],$row["apellido"],$row["nombre"], $row["domicilio"],$row["localidad"],$row["provincia"],$row["tel1"],$row["email"]);
}
mysqli_free_result($resultado);
mysqli_close($conexion); //Cierras la Conexión
?>
</table>
</body>
</html>