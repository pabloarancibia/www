<?php 
session_start();
if (!isset($_SESSION["apynom"])){
    header("Location:../views/frmMenuUsuarios.php?nologin=false");}
$_SESSION["apynom"];$_SESSION["secretaria"];
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
<script src="../js/ajaxpedmat.js" type="text/javascript"></script>
<script src="../js/pedmat.js"  type="text/javascript"></script>
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
<form id="form1" name="form1" method="post" action="">
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

<?php include "../Conexion/Conexion.php";
   $conexion=Conectarse();$usuario=$_SESSION["secretaria"];
    $sql="select * from subsecretarias where isec='".$usuario."' order by subsec asc";
    $res=mysqli_query($conexion,$sql);
    /*while ($fila=mysql_fetch_array($res)){
    echo $fila['nombre'];
    }*/
?>
<strong><div class="col-md-3" align="left" style="width:20%">(*)SUB-SECRETARIA SOLICITANTE:</div>
<div class="col-md-2">
<select name="secret" size=1 id="" onchange="from(document.form1.secret.value,'divsecret','../views/subsecretarias.php')">
 <option value="0">Seleccione</option>
  <?php while ($fila=mysqli_fetch_array($res)){ ?>
 <option value="<?php echo $fila['subsec']?>"><?php echo $fila['detsubsec']?></option>
  <?php }?>
</select> 
</div></strong>
<strong><div class="col-md-6" align="left" id="divsecret">
 </div></strong>
 
<strong><div class="col-md-6" align="left" id="divsubsecret"> </div></strong>
</div>
<br>
<div class="row">
<strong><div class="col-md-3" align="left" style="width:15%">DESTINO DE MATERIAL / SERVICIOS:</div>
<div class="col-md-6"><input name="destmat" type="text" id="destmat" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();"  maxlength="300"  />
</div>
</div>
</form>
<!----------------------------------------------------------- -->

<div class="registros" id="agrega-registros">
        <table class="table table-striped table-condensed table-hover">
         <tr>
          <th width="20">ORDEN</th> 
          <th width="300">CANTIDAD</th>
          <th width="500">DESCRIPCION DE BIENES/SERVICIOS</th>
          <th width="150">IMPORTE ESTIMADO $</th>
          <th width="50">Opciones</th>
         </tr>
         <tr>
          <td></td><td></td><td></td>
         <td></td>
         <td><a href="" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i></a> <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a></td>
         </tr>
        </table>

        <table class="table table-striped table-condensed table-hover">
         <tr>
          <td><h4>TOTAL $:</h4></td><td></td>
         </tr>
        </table>
    </div>
    <br>

<section>
  <table border="0" align="center">
   <tr>	
   <td width="100"><button id="nueva-factura" class="btn btn-primary">CARGAR PEDIDO</button></td><td width="100">  </td>
    <td width="100">
    <a href="../views/listaPedidosMateriales.php" 
    class="btn btn-primary" target="_blank" role="button"
    >FINALIZAR</a>
    </td>
   </tr>
  </table>
 </section> 
 


<!-- MODAL PARA EL REGISTRO DE FACTURAS-->
<div class="modal fade" id="registra-factura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un Pedido</b></h4>
   </div>
   <form id="formulario" class="formulario" onsubmit="return agregaRegistro();">
   <div class="modal-body">
    <table border="0" width="100%">
    <tr>
    <td colspan="2">
    <input type="text" required="required" readonly="readonly" name="idf" id="idf" readonly="readonly" style="visibility:hidden; height:5px;"/>
    
    </td>
    </tr>
     <tr>
      <td width="150">Proceso: </td>
      <td><input type="text" required="required" readonly="readonly" id="pro" name="pro"/></td>
     </tr>
     <tr>
     <td>Orden: </td>
     <td><input type="text" required="required" name="bsprov" id="bsprov" maxlength="11"/></td>
     </tr>
	 <tr>
     <td>Cantidad: </td>
     <td><input type="text"  required="required" name="montof" id="montof" />
     </td>
     </tr>
     <tr>
   	 <td>Descripción de Bienes/Servicios: </td>
     <td><input type="text" required="required" name="bienes" id="bienes" maxlength="15"  onkeyup="javascript:this.value=this.value.toUpperCase();" maxlength="300" /></td>
     </tr>
     <tr>
     <td>Importe Estimado $: </td>
     <td><input type="text"  name="totalf" id="totalf" required="required" />
     </td>
     </tr>
     <tr>
     <td colspan="2">
      <div id="mensaje"></div>
     </td>
     </tr>
 </table>
</div>
<div class="modal-footer">
 <input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
 <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
</div>


<!----------------------------------------------------------- -->

<div class="row">
 <div class="col-md-1"></div>
 <div class="col-md-3"><strong><h5 align="center" style="color:red;width:90%;"><strong></strong></h5>   
   </div>
 <div class="col-md-2"><input type="submit" name="Submit" value="CARGAR DETALLE" /></div>
 <div class="col-md-2"><input type="reset" /></div>
 </div>
 

  <br>
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