<?php 
  session_start();
   if (! empty($_SESSION["usuario"])) 
    {
      unset($_SESSION["usuario"]); 
  unset($_SESSION["razonsocial"]);
  unset($_SESSION["nroprov"]);
  session_destroy();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<title>Acceso al Sistema</title>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.min.css">
<link href='../images/icono.png' rel='shortcut icon' type='image/jpg'/>
<script src="../js/jquery-latest.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!---------------------------------------------------------------------------------------------  <!--   <script src="js/validarCampos.js" type="text/javascript"></script> -->
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
</h5></p>
 </div></td>

</tr>

</table>
<nav class="navbar navbar-default">
<div class="container-fluid">

<div class="collapse navbar-collapse" id="navbar-1">
 <ul class="nav navbar-nav">
 <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">INICIO<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="/index.php">Página Principal</a></li>
   </ul>
 </li>
 </ul>
 </div>
 </div>
 </nav>

</header>
				
 <form class="form-horizontal" action="/Economia/Logica/Validar_usuario.php" method="post">

<!--============content================================-->
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

<br></br>

<strong><div class="form-group" align="center" >INGRESE USUARIO HABILITADO</div></strong>
<div class="form-group">
    <label for="admin" class="col-sm-5 control-label">PROVEEDOR</label>
    <div class="col-sm-2">
      <input name="adminp" type="text" class="form-control" id="adminp" placeholder="nro.proveedor" onkeypress="return numeros(event)" required="required">
    </div>
</div>
<div class="form-group">
    <label for="admin" class="col-sm-5 control-label">USUARIO</label>
    <div class="col-sm-2">
      <input name="admin" type="text" class="form-control" id="admin" placeholder="usuario" required="required">
    </div>
</div>
<div class="form-group">
   <label for="password_usuario" class="col-sm-5 control-label">Password</label>
    <div class="col-sm-2">
      <input name="password_usuario" type="password" class="form-control" id="password_usuario" placeholder="Password" required="required">
    </div>
  </div>
  </div>
<table>
<tr>
      <td align="center" style="width: 428px; height: 45px;">&nbsp;</td>
</tr>
<tr>
      <td align="center" style="width: 428px; height: 45px;">&nbsp;</td>
</tr>

</table>
<table>
<tr>
      <td align="center" style="width: 428px; height: 45px;">&nbsp;</td>
           
<td height="34" colspan="2" style="text-align: center"><p style="width: 428px; height: 15px;">
<input class="btn btn-primary" type="submit" name="Submit" value="Iniciar Sesion" />
<input class="btn btn-primary" type="reset" /> 
<input class="btn btn-primary" type="Button" value="Salir" onclick="history.back()"> 
</td>
</tr>
</table>



</form>
<br></br><br></br><br></br>
<small> 
<div  align="center" style="width:100%; height:120px; background-color:#151515;color:#ffffff; font-family:Arial;font-size:8pt;">
    <p>Municipalidad de Resistencia<br />
    Av. Italia Nº 150<br />
    Telefono de Informes: (362) 4458201</p>
    <p>Todos los derechos reservados &copy; 2016<br />
      Se permite la reproduccion del contenido<br />
      citando la fuente
    </p>
  </div>
</small>
</html>
