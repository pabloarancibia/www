<?php 
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:../views/index.php?nologin=false");}
$_SESSION["usuario"];
$_SESSION["razonsocial"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Carga de Documentos con Gestion judicial</title>
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
<td><div align="left" style="color:#ffffff;" ><p><h4>USUARIO:<?php echo $_SESSION["usuario"]?>-<?php echo $_SESSION["razonsocial"]?></h4></p>
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
    <li><a href="../views/frmMenu.php">Página Principal</a></li>
   </ul></li></ul>
 </div></div>
 </nav></header>
<form id="form1" name="form1" method="post" action="../Logica/AltaFacturaCG.php" onsubmit="return chkBC(this)">
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
<strong><div class="col-md-2" align="right" style="width:20%">(*)NRO.PROVEEDOR:</div></strong>
<div class="col-md-1" align="left">
<input name="nroprov" id="nroprov" type='text'  style='color:black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%' onkeypress="return numeros(event)" required="required" />
</div>
<strong><div class="col-md-1" align="left" style="width:10%">(*)CARATULA:</div></strong>
<div class="col-md-3"><input name="caratula" type="text" id="caratula" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="200" required="required"/>
</div>
<strong><div class="col-md-1" align="left" style="width:10%">(*)EXPEDIENTE:</div></strong>
<div class="col-md-3"><input name="expdte" type="text" id="expdte" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="200" required="required"/>
</div>   
</div>
<br>
<div class="row">
   <div class="col-md-1"></div>
   <strong><div class="col-md-1" align="left" style="width:8%;">(*)JUZGADO:</div></strong>
   <div class="col-md-2"><input name="jzgdo" type="text" id="jzgdo" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="55"  required="required"/></div>
   <strong><div class="col-md-1" align="left" style="width:10%;">(*)MONTO $:</div></strong>
   <div class="col-md-2"><input name="monto" id="monto" type='text'  style='color:black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:75%' onkeypress="return numeros(event)" required="required" />
</div>
   <strong><div class="col-md-1" align="left" style="width:8%;">(*)CAUSA:</div></strong>
   <div class="col-md-2"><input name="causa" type="text" id="causa" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="70" required="required"/></div>
   
     </div>
  <br> 
  <div class="row">
<div class="col-md-1"></div>
<strong>
  <div class="col-md-1" align="left" >(*)PROFESIONAL 1:</div></strong>
  <div class="col-md-4" align="center" >
   <input name="dni" id="dni" type="text" style="color:black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:75%" onkeypress="return numeros(event)" required="required"/>
   </div>
   <strong><div class="col-md-1" align="left">(*)PROFESIONAL 2:</div></strong>
   <div class="col-md-4" align="center" >
   <input name="dni" id="dni" type="text" style="color:black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:75%" onkeypress="return numeros(event)" required="required"/>
   </div></div><br>
   <div class="row">
   <div class="col-md-1"></div>
   
<strong><div class="col-md-1" align="left" style="width:12%" >(*)HONORARIOS $:</div></strong>
   <div class="col-md-1"><input name="monto" id="monto" type='text'  style='color:black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%' onkeypress="return numeros(event)" required="required" />
</div>
 <strong><div class="col-md-1" align="left" style="width:10%">(*)COSTAS $:</div></strong>
   <div class="col-md-1"><input name="monto" id="monto" type='text'  style='color:black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%' onkeypress="return numeros(event)" required="required" />
</div> 
 <strong><div class="col-md-1" align="left" style="width:20%">(*)TOTAL DEUDA $:</div></strong>
  <div class="col-md-1"><input name="monto" id="monto" type='text'  style='color:black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%' onkeypress="return numeros(event)" required="required" />
</div>
   </div>
 <br> 
<div class="row">
<div class="col-md-1"></div>
<strong><div class="col-md-1" align="left" style="width:7%">(*)SENTPRIM:</div></strong>
   <div class="col-md-2"><input name="dombarrio" type="text" id="dombarrio" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="35" required="required"/></div>

<strong><div class="col-md-1" align="left">(*)SENTFOJA:</div></strong>
   <div class="col-md-2"><input name="domlocal" type="text" id="domlocal" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="40" required="required"/></div>
<strong><div class="col-md-1" align="left" >(*)APELA:</div></strong>
   <div class="col-md-2"><input name="domprovincia" type="text" id="domprovincia" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="40" required="required"/></div>
  </div> <br>
<div class="row">
<div class="col-md-1"></div>
  <strong>
 <div class="col-md-1" align="left" style="width:8%;">(*)APELAFOJA:</div></strong>
   <div class="col-md-2"><input name="tel" type="text" id="tel" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onkeypress="return numeros(event)" maxlength="12" required="required"/></div>
   <div class="col-md-2" align="left" style="width:10%;">Números 0-9</div>
 <strong>
 <div class="col-md-2" align="right" style="width:20%;">(*)ALZA:</div></strong>
   <div class="col-md-2"><input name="telalt" type="text" id="telalt" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onkeypress="return numeros(event)" maxlength="12" /></div>
   <div class="col-md-2" align="left" style="width:10%;">Números 0-9</div>
 
 </div>
 <br>
 <div class="row">
<div class="col-md-1"></div>
  <strong>
 <div class="col-md-1" align="left" style="width:8%;">(*)ALZAFOJA:</div></strong>
   <div class="col-md-2">
  <input type="text" id="id_mail" name="mail"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mail')"/></div>
   <strong>
 <div class="col-md-2" align="right" style="width:20%;">(*)RECURSO:
 </div></strong>
   <div class="col-md-2">
   <input type="text" id="id_mailalt" name="mailalt"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mailalt')"/>
   </div>
   <div class="col-md-2" align="right" style="width:20%;">(*)RECURSO FOJA:
 </div></strong>
   <div class="col-md-2">
   <input type="text" id="id_mailalt" name="mailalt"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mailalt')"/>
   </div>
 </div><br>
 <div class="row">
<div class="col-md-1"></div>
  <strong>
 <div class="col-md-1" align="left" style="width:8%;">(*)ESTADO EXPDTE:</div></strong>
   <div class="col-md-2">
  <input type="text" id="id_mail" name="mail"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mail')"/></div>
   <strong>
 <div class="col-md-2" align="right" style="width:20%;">(*)AP 505:
 </div></strong>
   <div class="col-md-2">
   <input type="text" id="id_mailalt" name="mailalt"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mailalt')"/>
   </div>
   <div class="col-md-2" align="right" style="width:20%;">(*)AP 2868:
 </div></strong>
   <div class="col-md-2">
   <input type="text" id="id_mailalt" name="mailalt"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mailalt')"/>
   </div>
 </div>
 <br>
 <div class="row">
<div class="col-md-1"></div>
  <strong>
 <div class="col-md-1" align="left" style="width:8%;">(*)REQ4474FECHA:</div></strong>
   <div class="col-md-2">
  <input type="text" id="id_mail" name="mail"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mail')"/></div>
   <strong>
 <div class="col-md-2" align="right" style="width:20%;">(*)REQ4474FOJA:
 </div></strong>
   <div class="col-md-2">
   <input type="text" id="id_mailalt" name="mailalt"  class="" value="" size="30" maxlength="100" style="color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:92%;" onKeyUp="javascript:validateMail('id_mailalt')"/>
   </div>
    </div>
 <br>
 </div><br>
 </div>
 <div class="row">
 <div class="col-md-1"></div>
 <div class="col-md-3"><strong><h5 align="center" style="color:red;width:90%;"><strong>(*)CAMPOS OBLIGATORIOS</strong></h5>   
   </div>
 <div class="col-md-2"><input type="submit" name="Submit" value="GUARDAR" /></div>
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