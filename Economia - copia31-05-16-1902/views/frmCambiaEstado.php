﻿<?php 
session_start();
if (!isset($_SESSION["apynom"])){
    header("Location:../views/frmMenuUsuarios.php?nologin=false");}
$_SESSION["apynom"];
$est=$_SESSION["est"];
$rz=$_SESSION["rz"];
$id=$_SESSION["np"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Cambio de Estado de Documentos de Acreedores</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<link href='../images/icono.png' rel='shortcut icon' type='image/jpg'/>
<link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/style.css">
<script src="../js/jquery-latest.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
        <![endif]-->
</head>
<body class="body" style=" background-image: url(../images/bgcity.jpg);
  background-attachment: fixed;">
   <!--========header==========================-->
<header>
<table width="100%" height="120" border="0" background="../images/header2015.jpg">
<tr><td width="40%"></td>
<td><div align="left" style="color:#ffffff;" ><p><h2>SECRETARIA DE ECONOMIA</h2></p>
 </div></td>
</tr>
<tr><td width="40%"></td>
<td><div align="left" style="color:#ffffff;" ><p><h4>USUARIO:<?php echo $_SESSION["apynom"]?></h4></p>
 </div></td>
 <td><div align="left" style="color:#ffffff;" >
<p><h5>
 <script languaje="JavaScript"> 
var mydate=new Date() 
var year=mydate.getYear() 
if (year < 1000) 
year+=1900 
var day=mydate.getDay() 
var month=mydate.getMonth() 
var daym=mydate.getDate() 
if (daym<10) 
daym="0"+daym 
var dayarray=new Array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado") 
var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre") 
document.write("<small>  <font color='FFFFFF' face='Arial'>"+dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year+"</font></small>") 
</script> 
</h5></p></div></td>
</tr>
</table>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="navbar-1">
 <ul class="nav navbar-nav">
 <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">INICIO<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="../views/frmMenuUsuarios.php">Página Principal</a></li>
   </ul>
 </li>
 </ul>
 </div>
 </div>
 </nav>
</header>
<form id="form1" name="form1" method="post" action="../Logica/CambiaEstadoF.php" onsubmit="return chkBC(this)">
<h4 align="center" class="letra" style="background-color:#7FFF00; color:red;"><strong> <?php 
       if(isset($respuesta))
      echo $respuesta;?></strong></h4>    
 
 <!--==============================content================================-->

<div class="container-fluid" align="center" style="background-color:#D8D8D8;">
<br>
<div class="row">
<strong><div class="col-md-2" align="right" style="width:20%">NRO.PROVEEDOR:</div></strong>
<?php 
   echo "<input type='text' style='color:Red;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:10% ' readonly='readonly' value='".$id."'>";
    ?>
</div>
<br>
<div class="row">
<strong><div class="col-md-2" align="right" style="width:20%">RAZON SOCIAL:</div></strong>
<?php 
   echo "<input type='text' style='color:Red;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:25% ' readonly='readonly' value='".$rz."'>";
    ?>
</div>
 <br>
 <div class="row">
<strong><div class="col-md-2" align="right" style="width:20%">DOCUMENTOS INHABILITADOS?:</div></strong>
<?php 
   echo "<input type='text' style='color:Red;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:10% ' readonly='readonly' value='".$est."'>";
    ?>
</div>
 <br>
 <div class="row">
<strong><div class="col-md-2" align="right" style="width:20%">INHABILITA DOCUMENTOS?:</div></strong>
<div class="col-md-1" align="left" style="width:5%;">:</div></strong>
  <div class="col-md-1">
  <select name="estad" size=1 style="text-align:center;font-style:bold" required="required">
    <option value='1'>NO</option>
    <option value='2'>SI</option>
   </select>
  </div>
   </div>
</div>
  
 </div>
 <br>
  
</div>
 <div class="row">
 <div class="col-md-1"></div>
 <div class="col-md-3"></div>

 <div class="col-md-2"><input type="submit" name="Submit" value="GRABAR" /></div>
 <div class="col-md-2"><input type="reset" /></div>
   
 </div>
 </div>  
</div>
</div>

</form>

<br>
<!--==============================footer=================================-->
<small> 
<div class="col-md-12" align="center" style="background-color:#151515;color:#ffffff; font-family:Arial;font-size:8pt;">
    <p>Municipalidad de Resistencia-Av. Italia Nº 150<br />
    Telefono de Informes: (362) 4458201</p>
    <p>Todos los derechos reservados &copy; 2016-Se permite la reproduccion del contenido citando la fuente
    </p>
  </div>
</small>
</body>  
</html>