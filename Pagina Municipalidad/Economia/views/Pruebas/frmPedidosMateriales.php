﻿<?php 
session_start();
if (!isset($_SESSION["apynom"])){
     
  header("Location:../views/frmMenuUsuarios.php?nologin=false");}
$_SESSION["apynom"];
$_SESSION["dni"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<title>Pedido de Materiales</title>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
<link href='../images/icono.png' rel='shortcut icon' type='image/jpg'/>
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
</tr></table>
 <nav class="navbar navbar-default">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="navbar-1">
 <ul class="nav navbar-nav">
 <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">INICIO<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="../views/frmMenuUsuarios.php">Página Principal</a></li>
   </ul></li></ul>
 </div></div>
 </nav></header>
<form id="form1" name="form1" method="post" action="../Logica/CabeceraPedMaterial.php">
<h4 align="center" class="letra" style="background-color:#7FFF00; color:red;"><strong> <?php 
       if(isset($respuesta))
      echo $respuesta;?></strong></h4>    
<!--==============================content================================-->
<script>
function numeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8){
        return true;
    }
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
   return patron.test(tecla_final);
}
</script>   
<div class="container-fluid" align="center" style="background-color:#D8D8D8;">
<br>
<div class="row">
<strong><div class="col-md-1" align="left" style="width:8%">SECRETARIA SOLICITANTE:</div>
<div class="col-md-2">
<select name="secsol" >
<?php 
     include "../Conexion/Conexion.php";
      $conexion=Conectarse();
      $query="select * from secretarias order by sec asc;";
      $result =mysqli_query($conexion,$query);
      while($fila=mysqli_fetch_array($result)){
		 $di=$fila['sec'];
		 $dd=$fila['detsec']; 
		echo "<option value='$di'>$dd</option>";
	}
	
	  mysqli_free_result($result);//mysqli_close($conexion);
?>
</select>
</div></strong>
<strong><div class="col-md-1" align="left" style="width:8%">SUBSECRETARIA SOLICITANTE:</div>
<div class="col-md-4">
<select name="subsol">
<?php // include "../Conexion/Conexion.php";
     $conexion=Conectarse();
      $query="select * from subsecretarias order by subsec asc;";
      $result2 =mysqli_query($conexion,$query);
      while($fila2=mysqli_fetch_array($result2)){
		 $sdi=$fila2['subsec'];
		 $sdd=$fila2['detsubsec']; 
		echo "<option value='$sdi'>$sdd</option>";
	}
	  mysqli_free_result($result2);mysqli_close($conexion);
 
?>
</select>

</div></strong>
<strong><div class="col-md-1" align="left" style="width:8%">DCCION GENERAL SOLICITANTE:</div>
<div class="col-md-2">
<select name="dirsol">
<?php // include "../Conexion/Conexion.php";
     $conexion=Conectarse();
      $query="select * from dirgenerales order by dirgral asc;";
      $result2 =mysqli_query($conexion,$query);
      while($fila2=mysqli_fetch_array($result2)){
		 $sdig=$fila2['dirgral'];
		 $sddg=$fila2['dirdetalle']; 
		echo "<option value='$sdig'>$sddg</option>";
	}
	  mysqli_free_result($result2);//mysqli_close($conexion);
 
?>
</select>

</div></strong>

</div>
<!----------------------------------------------------------------------------- -->
<div class="row">
<strong><div class="col-md-3" align="left" style="width:15%">DESTINO DE MATERIAL / SERVICIOS:</div>
<div class="col-md-6"><input name="destmat" type="text" id="destmat" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();"  maxlength="300"  />
</div>
</div>
<div class="row">
 <div class="col-md-1"></div>
 <div class="col-md-3"><strong><h5 align="center" style="color:red;width:90%;"><strong></strong></h5>   
   </div>
 <div class="col-md-2"><input type="submit" name="Submit" value="CARGAR DETALLE" /></div>
 <div class="col-md-2"><input type="reset" /></div>
 </div>
 
</form>

<!----------------------------------------------------------------------------- -->

 </div>  


<br>
<!--==============================footer=================================-->
<!--small> 
<div class="col-md-12" align="center" style="background-color:#151515;color:#ffffff; font-family:Arial;font-size:8pt;">
    <p>Municipalidad de Resistencia-Av. Italia Nº 150<br />
    Telefono de Informes: (362) 4458201</p>
    <p>Todos los derechos reservados &copy; 2016-Se permite la reproduccion del contenido citando la fuente
    </p>
  </div>
</small-->
</body>  
</html>