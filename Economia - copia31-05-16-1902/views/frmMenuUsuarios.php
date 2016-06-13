<?php
session_start();
if (!isset($_SESSION["apynom"])){
    header("Location:../views/index.php?nologin=false");}
$_SESSION["nivel"];
$_SESSION["dni"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Municipalidad de Resistencia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="../js/jquery-latest.js" type="text/javascript"></script>
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href='../images/icono.jpg' rel='shortcut icon' type='image/jpg'/-->
<!---------------------------------------------------------------------------------------------  <!--   <script src="js/validarCampos.js" type="text/javascript"></script> -->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
![endif]-->
</head>
<body class="body" style="background-image: url(../images/bgcity.jpg);
  background-attachment: fixed;">
   <!--========header==========================-->
<header>
<!------------------------------------------>
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
</h5></p>
 </div></td>

</tr>

</table>


<!-------------------------------->
<nav class="navbar navbar-default" role="navigation">
<div class="container-fluid">

<div class="collapse navbar-collapse navbar-ex1-collapse">
 <ul class="nav navbar-nav">
 <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">INICIO<span class="caret"></span></a>
    <ul class="dropdown-menu">
    <li><a href="/index.php">Página Principal</a></li>
   </ul>
 </li>
  <li class="dropdown"><?php $level=$_SESSION['nivel'];
   if($level==0||$level==1){?>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">MESA DE ENTRADAS<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="../views/frmAltaEx.php">Alta de Clave Proveedores</a></li>
     <li><a href="../views/frmGenerarFormulario.php">Generar Formulario Acreedores Sin Gestión Judicial</a></li>
     <li><a href="../views/frmModiEstadoFacturas.php">Modificar Estado Facturas Sin Gestión Judicial</a></li>
	 <li><a href="../views/frmModificarFormulario.php">Modificar Formulario Acreedores Sin Gestión Judicial</a></li>
     <!--li><a href="../views/frmGenerarFormularioCG.php">Generar Formulario Acreedores Con Gestión Judicial</a></li>
     <li><a href="../views/frmModiEstadoFacturasCG.php">Modificar Estado Facturas Con Gestión Judicial</a></li-->
      <li><a href="../views/frmGenFormCompensa.php">Generar Formulario de Compensacion de Deuda</a></li>
      <li><a href="../views/frmModiFormCompensa.php">Modificar Formulario de Compensacion de Deuda</a></li>
      <li><a href="../views/frmModiEstadoCompensa.php">Modificar Estado de Compensacion de Deuda</a></li>
      
      </ul>
  </li><?php }?>
  <li class="dropdown"><?php $level=$_SESSION['nivel'];
   if($level==1||$level==3){?>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">PEDIDOS DE MATERIALES<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="../views/frmPedidosMateriales.php">Carga de Pedido de Materiales</a></li>
     
      </ul>
  </li><?php }?>


  <li class="dropdown"><?php $level=$_SESSION['nivel'];
   if($level==1||$level==2){?>
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">SECRETARIA<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="../views/frmAltaME.php">Ingreso de Trámites</a></li>
      <li><a href="../views/frmModME.php">Modificación de Estado de Trámite</a></li>
	  <li><a href="../views/frmListaME.php">Listado Diario de Trámites por Area</a></li>
    </ul>
  </li><?php }?>
  <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">USUARIOS <span class="caret"></span></a>
    <ul class="dropdown-menu">
     <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
     <a href="../views/frmAltaUser.php">Alta de Usuarios del Sistema
     </a>
     <?php }?>
     </li>
     <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
     <a href="../views/frmAltaUser2.php">Modificación de Permisos de Usuarios del Sistema
     </a>
     <?php }?>
     </li>
	    <li><a href="../views/frmModiCUsuario.php">Cambio de Clave Usuarios del Sistema</a></li>
     </ul>
  </li>
	 <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">LISTADOS<span class="caret"></span></a>
    <ul class="dropdown-menu">
       <li><a href="../views/listaDProveedores.php">Datos Proveedores</a></li>
      <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
         <a href="../views/frmListMontoProv.php">Montos Adeudados por Proveedor Presentados</a></li>
      <?php }?>
      <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
         <a href="../views/frmListMontoProvNP.php">Montos Adeudados por Proveedor No Presentados</a></li>
      <?php }?>
      <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
         <a href="../views/frmListMontoCompensa.php">Montos Solicitados por Proveedor para Compensar</a></li>
      <?php }?>
      

      </ul>
  </li>
   <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">EXPORTAR A EXCELL<span class="caret"></span></a>
    <ul class="dropdown-menu">
       <li><a href="../views/explistaDProv.php">Datos Proveedores</a></li>
      <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
         <a href="../views/explistaMontoProv.php">Montos Adeudados por Proveedor Presentados</a></li>
      <?php }?>
      <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
         <a href="../views/explistaMontoProvNP.php">Montos Adeudados por Proveedor No Presentados</a></li>
      <?php }?>
      <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
         <a href="../views/explistaMontoCompensa.php">Montos Solicitados por Proveedor para Compensar</a></li>
      <?php }?>
      <li><?php $level=$_SESSION['nivel'];
         if($level==1){?>
         <a href="../views/explistaDetalle.php">Detalle de Anexo I</a></li>
      <?php }?>
      


      </ul>
  </li>
  
  
     
    </ul>
</div>
</div>
</nav>
<!-------------------------------------------------------------------------------------------------->
<!--script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script-->
</header>
<!-- -->
  
<!--=============content===========-->

<div class="row">
<div class="col-md-1"></div>
<strong> <div class="col-md-4" align="left"><h3>SECRETARIA DE ECONOMIA:</h3></div></strong>
 <div class="col-md-5"></div>
</div>
<div class="row"> 
<div class="col-md-1"></div>
<div class="col-md-6" align="justify">
  <strong style="color:#000000;"> ---</strong>
</div>
<div class="col-xs-3">
   <div class="thumbnail">
      <img src="../images/page1-img4.png" alt="imagen">
      <div class="caption">
          <h3>HORARIO DE ATENCION</h3>
              <p>Lunes a Jueves: 8:00 - 11:00 hs y 17:00 - 19:00 hs</p>
              <p>Viernes: 8:00 - 11:00 hs</p>
              <p>Mesa Técnica de Ayuda: Lunes a Viernes 17:00 - 19:00 hs</p>
      <p>Contacto: regularizacionmr@gmail.com</p>
      </div>
   </div>
 </div>
</div>

<!-------------------------------------->

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-6" align="justify">
  <strong style="color:#000000;"></strong>
</div>


</div>
  <!--==========footer=================================-->
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
</body>  
</html>