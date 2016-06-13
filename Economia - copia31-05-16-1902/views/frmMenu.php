<?php
session_start();
if (!isset($_SESSION["usuario"])){
    header("Location:../views/index.php?nologin=false");}
$_SESSION["usuario"];
$_SESSION["razonsocial"];$_SESSION["nroprov"];
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
<body class="body" style=" background-image: url(../images/bgcity.jpg);
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
<td><div align="left" style="color:#ffffff;" ><p><h4>USUARIO:<?php echo $_SESSION["usuario"]?>-PROVEEDOR:<?php echo $_SESSION["razonsocial"]?></h4></p>
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
  <li class="dropdown">
   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">DATOS PERSONALES <span class="caret"></span></a>
    <ul class="dropdown-menu">
     <li><a href="../views/frmAltaProveedor.php">Alta de Datos Personales de Acreedores</a></li>
	   <li><a href="../views/frmModiProveedor.php">Modificacion de Clave de Usuario</a></li>
    <li><?php
           include "../Conexion/Conexion.php";$np=$_SESSION["nroprov"];
           $conexion=Conectarse();
           $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
           $result =mysqli_query($conexion,$query);
             if($row = mysqli_fetch_array($result))
                {if($row["estado"] == 'P')
                  {
                  echo "COMPLETAR SUS DATOS PERSONALES PARA COMPENSACIONES";
                ?>
            <?php }
             else{?><a href="../views/frmProvCompensa.php">Alta de Datos para Compensación</a><?php } } ?>
      </li>
     </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">TRAMITES<span class="caret"></span></a>
    <ul class="dropdown-menu">
     <li><?php
           $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
           $result =mysqli_query($conexion,$query);
             if($row = mysqli_fetch_array($result))
                {if($row["estado"] == 'P')
                  {
                  echo "DEBE COMPLETAR SUS DATOS PERSONALES PRIMERO";
                ?>
            <?php }
             else{?>
             <a href="../views/frmFacturasSG.php">Sin Sentencia Firme</a></li>
           <?php } } ?>
           <li><?php
           $np=$_SESSION["nroprov"];$query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
           $result =mysqli_query($conexion,$query);
             if($row = mysqli_fetch_array($result))
                { if($row["estado"] == 'P')
               {
             echo "DEBE COMPLETAR SUS DATOS PERSONALES PRIMERO";
               ?>
            <?php }
             else{?>
             <a href="../views/frmFacturasCG.php">Con Sentencia Judicial Firme</a></li>
           <?php } } ?>
            <li><?php $np=$_SESSION["nroprov"];
           $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
           $result =mysqli_query($conexion,$query);
             if($row = mysqli_fetch_array($result))
                {
                  if($row["estado"] == 'P')
               {
             echo "COMPLETAR DATOS PARA COMPENSACIONES";
               ?>
            <?php }
             else{?>
             <a href="../views/frmCompensacion.php">Pedido de Consolidación de Deuda</a></li>
           <?php } } ?>
         <!--</ul>-->
        </li>
        <!-- residuos -->
        <li><?php $np=$_SESSION["nroprov"];
       $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
       $result =mysqli_query($conexion,$query);
         if($row = mysqli_fetch_array($result))
            {
              if($row["estado"] == 'P')
           {
         echo "COMPLETAR DATOS";
           ?>
        <?php }
         else{?>
         <a href="../views/pruebaResiduos.php">Registro de Grandes Generadores De Residuos Solidos Urbanos</a></li>
       <?php } } ?>
       <!-- inscripcion proveedores -->
       <li><?php $np=$_SESSION["nroprov"];
      $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
      $result =mysqli_query($conexion,$query);
        if($row = mysqli_fetch_array($result))
           {
             if($row["estado"] == 'P')
          {
        echo "COMPLETAR DATOS";
          ?>
       <?php }
        else{?>
        <a href="../views/frmProveedoresInscrip.php">SOLICITUD DE INSCRIPCION PROVEEDORES</a></li>
      <?php } } ?>
      </ul>
      </li>
        <!-- -->
	 <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">LISTADOS<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><?php
           $np=$_SESSION["nroprov"];
           $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
           $result =mysqli_query($conexion,$query);
             if($row = mysqli_fetch_array($result))
                {
                if($row["estado"] == 'P')
               {
             echo "DEBE COMPLETAR SUS DATOS PERSONALES PRIMERO";
               ?>
            <?php }
             else{?>
             <a href="../views/frmListFacturasSG.php">Listar Comprobante de Reclamo Sin Sentencia Firme</a></li>
           <?php } } ?>
           <!--li><?php
           $np=$_SESSION["nroprov"];
           $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
           $result =mysqli_query($conexion,$query);
             if($row = mysqli_fetch_array($result))
                {
                if($row["estado"] == 'P')
               {
             echo "DEBE COMPLETAR SUS DATOS PERSONALES PRIMERO";
               ?>
            <?php }
             else{?>
             <a href="../views/frmListFacturasCG.php">Listar Comprobante de Reclamo Con Sentencia Firme</a></li-->
           <?php } } ?>
           <li><?php
           $np=$_SESSION["nroprov"];
           $query="SELECT estado FROM usuarios WHERE nroprov = '".$np."'";
           $result =mysqli_query($conexion,$query);
             if($row = mysqli_fetch_array($result))
                {
                if($row["estado"] == 'P')
               {
             echo "DEBE COMPLETAR SUS DATOS PERSONALES PRIMERO";
               ?>
            <?php }
             else{?>
             <a href="../views/frmListDocCompensa.php">Listar Comprobante de Pedido de Compensaciones</a></li>
           <?php } } ?>
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
  <strong style="color:#000000;"></strong>
  <strong style="color:#000000;"></strong>
  <strong style="color:red;"> </strong>
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
<div class="col-xs-3">
   <div class="thumbnail" >
      <img src="../images/map.png" alt="70%">
      <div class="caption">
          <h3>DONDE ESTAMOS</h3>
              <p>DIRECCION: Avenida Italia 150</p>

      </div>
   </div>
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
