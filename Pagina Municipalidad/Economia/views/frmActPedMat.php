﻿<?php 
session_start();
if (!isset($_SESSION["apynom"])){
    header("Location:../views/frmMenuUsuarios.php?nologin=false");}
$_SESSION["apynom"];$_SESSION["secretaria"];

include "../Conexion/Conexion.php";
$conexion=Conectarse();$nropedido=0;$aniopedido=date("Y");
$nsec=$_SESSION["secretaria"];
$sqlnrop="select nropedido, aniopedido from pedidomateriales where idsolicitante='".$nsec."'
order by aniopedido desc, nropedido desc limit 1;";
$resu=mysqli_query($conexion,$sqlnrop);
if($resu!=null){
 $row=@mysqli_fetch_array($resu);
 $nropedido=$row['nropedido']+1;
 echo "ped:".$nropedido;
}
else{
 $nropedido=1;
 echo "ped:".$nropedido;
}
$nroorden=1;
$_SESSION["nropedido"]=$nropedido;
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
<script src="../js/pedmat.js"  type="text/javascript"></script>
<!--script src="../js/ajaxpedmat.js" type="text/javascript"></script-->
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
<form id="form1" name="form1" method="post" action="../Logica/agrega_pedidoCab.php">
<!--==============================content================================-->
<script>
function numeros(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8 || tecla==46){
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

<?php
    $usec=$_SESSION["secretaria"];
    $sql="select * from secretarias where sec='".$usec."'order by sec asc";
    $res=mysqli_query($conexion,$sql);
    ?>
<strong><div class="col-md-1" align="left" style="width:5%">(*)SECRETARIA:</div>
<div class="col-md-2" required="required">
<select name="secret" size=1 id="" >
 <option value="0">Seleccione</option>
  <?php while ($fila=mysqli_fetch_array($res)){ 
    ?>
 <option value="<?php echo $fila['sec']?>"><?php echo $fila['detsec']?></option>
  <?php }?>
</select> 
</div></strong>
<strong><div class="col-md-1" align="left" style="width:8%">(*)SUB-SECRETARIA:</div>
<div class="col-md-4" required="required">
<select name="subsecret" size=1 id="">
 <option value="0">Seleccione</option>
  <?php 
 $sql="select * from subsecretarias ss, secretarias s where (ss.isec=s.sec)and(s.sec='".$usec."') order by ss.subsec asc";
    $res=mysqli_query($conexion,$sql);
  while ($fila=mysqli_fetch_array($res)){ 
    ?>
 <option value="<?php echo $fila['subsec']?>"><?php echo $fila['detsubsec']?></option>
  <?php }?>
</select> 
</div></strong>

<strong><div class="col-md-1" align="left" style="width:10%" >(*)DCCION.GRAL:</div>
<div class="col-md-2" required="required">
<select name="dirgral" size=1 id="">
 <option value="0">Seleccione</option>
  <?php 
 $sql="select * from dirgenerales dg, subsecretarias ss, secretarias s where (s.sec='".$usec."')and (s.sec=ss.isec) and (ss.subsec=dg.issec) order by dg.dirgral asc";
    $res=mysqli_query($conexion,$sql);
  while ($fila=mysqli_fetch_array($res)){ 
    ?>
 <option value="<?php echo $fila['dirgral']?>"><?php echo $fila['dirdetalle']?></option>
  <?php }?>
</select> 
</div></strong>
</div>

<br>
<div class="row">
<strong><div class="col-md-3" align="left" style="width:20%">USO DEL MATERIAL/SERVICIO:</div>
<div class="col-md-6"><input name="destmat" type="text" id="destmat" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:100%;" 
    onkeyup="javascript:this.value=this.value.toUpperCase();"  maxlength="300"  />
</div></strong>
<div class="col-md-2"><button id="nueva-factura" class="btn btn-primary">CARGAR PEDIDO</button></div>
<div class="row">
<strong><div class="col-md-3" align="right" style="width:20%">CUENTA DESTINO:</div>
<div class="col-md-6">
  <select name="cuenta" size=1 style="text-align:center;font-style:bold" required="required">
    <option value='1'>CAJA CHICA</option>
    <option value='2'>CUENTA GENERAL</option>
    <option value='3'>FDO.REPARACION MANTENIMIENTO Y CONTROL CALLES</option>
    <option value='4'>FDOS.DE TERCEROS Y OTROS EN GARANTIA</option>
    <option value='5'>FDOS.REPAROS EN GENERAL</option>
    <option value='6'>GAS.IND.UTIL.OF.PAR.MOTOC.</option>
    <option value='7'>FDO.ESP.OBRAS INFRAESTRUCTURA</option>
    <option value='8'>LOTERIA CHAQUEÑA</option>
    <option value='9'>CUENTA ESPECIAL APORTE FINANCI</option>
    <option value='10'>PRESIDENCIA CONSEJO</option>
    <option value='11'>PRODISM</option>
    <option value='12'>PROGRAMA COMEDORES INFANTILES</option>
    <option value='13'>FONDO FEDERAL SOLIDARIO</option>
    <option value='14'>CTA.ESP.SUBASTA PUBLICA</option>
    <option value='15'>FONDO DE DESARROLLO LOCAL</option>
  </select>
</div></strong>
  
</div>
</div><br>
<div class="row">
 <table class="table table-striped table-condensed table-hover">
 <tr><td align="center"><h4>TOTAL EN LETRAS:</h4></td>
 <td><input name="totalletra" type="text" id="totalletra" style="text-transform:uppercase;color:Black;background-color:WhiteSmoke;border-color:LightSkyBlue;border-width:1px;border-style:Solid;font-family:Verdana;font-size:Small;font-weight:bold;width:40%;" 
  onkeyup="javascript:this.value=this.value.toUpperCase();"  maxlength="300" required="required" />
  </td></tr>
 </table>
    </div>
</form>
<!----------------------------------------------------------- -->

<div class="registros" id="agrega-registros">
 <table class="table table-striped table-condensed table-hover">
 <tr>
  <th width="300" align="center">CANTIDAD</th>
  <th width="500" align="center">DESCRIPCION DE BIENES/SERVICIOS</th>
  <th width="150" align="center">IMPORTE ESTIMADO $</th>
  <th width="50" align="center">Opciones</th>
 </tr>
 <tr><td></td><td></td><td></td>
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
    <td width="100">
    <input id="b1" type="submit" class="btn btn-primary" value="GRABAR PEDIDO" />

    </td>
   </tr>
  </table>
 </section> 
<!-- MODAL PARA EL REGISTRO DE PEDIDOS-->
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
    <input type="text" required="required" readonly="readonly" name="idf" id="idf" style="visibility:hidden; height:5px;"/>
    </td>
    </tr>
    <tr>
    <td colspan="2">
    <?php echo "<input type='text' name='bsprov' readonly='readonly' style='height:5px; visibility:hidden;' value='".$nropedido."'>";?>
 </td>
    </tr>
     <tr>
      <td width="150">Proceso: </td>
      <td><input type="text" required="required" readonly="readonly" id="pro" name="pro"/></td>
     </tr>
     <!--tr>
     <td>Orden: </td>
     <td>
     <?php echo "<input type='text' name='orden' readonly='readonly' style='height:50px; visibility:hidden;' value='".$nroorden."'>";?>
     <!--input type="text" required="required" name="bsprov" id="bsprov" maxlength="11"/--></td>
     </tr-->
   <tr>
     <td>Cantidad: </td>
     <td><input type="text"  required="required" name="montof" id="montof" />
     </td>
     </tr>
      <tr>
     <td>Rubro: </td>
     <td>
    <?php
     $sql="select * from rubros order by rubro asc";
    $res=mysqli_query($conexion,$sql);
    ?>
    <strong>
    <select name="rubro" size=1 id="rr" onchange="cargarsub(id)">
    <option value="0">Seleccione</option>
     <?php while ($fila=mysqli_fetch_array($res)){ 
    ?>
     <option value="<?php echo $fila['rubro']?>"><?php echo $fila['rubrodesc']?></option>
  <?php }?>
</select></strong></td>
     </tr>
	    <?php
	    $sql="select * from subrubros order by subrubro asc";
       $res2=mysqli_query($conexion,$sql);
    ?>
      
     <tr>
     <td>Sub-Rubro</td>
     <td>
    <strong>
    <select name="subrubro" size=1 id="srr" disabled>
    <option value="0">Seleccione</option>

     <?php while ($fila=mysqli_fetch_array($res2)){  ?>    
     <option id="<?php echo $fila['idrubro']?>" value="<?php echo $fila['subrubro']?>"><?php echo $fila['subrubdesc']?></option>
  <?php }?>
  </select></strong>
   <script type="text/javascript">
    function cargarsub(idrubro){
    var select = document.getElementById(idrubro);
    var seleccionado = select.options[select.selectedIndex].value; 
    var selectEst = document.getElementById("srr");
    selectEst.disabled=false;
    selectEst.value=0;
   for (var i = 0; i < selectEst.length; i++) {
       var opt = selectEst[i];
        if (seleccionado == opt.id)
     {
      document.getElementById("srr").options[i].style.display ="";
      }else{
    
    document.getElementById("srr").options[i].style.display ="none";
       
  }
}
}  </script>
  </td></tr>
  <tr align="center"><td align="center" width="300">Descripción de Bienes/Servicios</td></tr>
   <tr><td>
   <textarea name="bienes" id="bienes" class="form-control" rows="4" cols="200"></textarea></td></tr>
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
<br><br>
  <br>
 </div>  
</div>
</div>

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