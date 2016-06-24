<!DOCTYPE html>
<html lang="en">
<head>
<title>Municipalidad de Resistencia</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<!--link rel="stylesheet" type="text/css" href="../css/estilo.css" media="screen"-->
<link rel="stylesheet" type="text/css" href="../css/nav-menu.css">
<script src="../js/jquery.js"></script>
<script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/device.min.js" type="text/javascript"></script>

<script src="../js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="../js/custom.js" type="text/javascript"></script>
<link href='../images/icono.jpg' rel='shortcut icon' type='image/jpg'/>
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
 <link href="../css/estilos-formularios.css" rel="stylesheet">
<!---------------------------------------------------------------------------------------------  <!--   <script src="js/validarCampos.js" type="text/javascript"></script> -->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
![endif]-->
</head>
<body>
<main class="text-center">    
    <section class="well1">
      <div class="margin-header container">
   <!--========header==========================-->
<header>
<!------------------------------------------>
<div id=" container" class="stuck_container">
   <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12">                  
    <nav class="navbar navbar-default"> <br>
<h1 class="col-md-12 logo">
<a href="/index.php"><img class="img-float img-responsive" src="../images/logo-municipio.png" alt="logo" /><!--texto--></a>
<div class="separador"><img class="img-float" src="../images/separador-logos.png" alt="logo"/></div>
<img class="img-float img-responsive logo-economia" src="../images/logo-economia.png" alt="logo" />
<div class="fecha" style="color:#ffffff;">
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
</script></h5></p></div></h1>
<!--div align="right" style="color:#ffffff;" ><p><h4>USUARIO:<?php echo $_SESSION["usuario"]?>-PROVEEDOR:<?php echo $_SESSION["razonsocial"]?></h4></p>
 </div-->
<!-------------------------------->
<div class="nav-margin nav-shadow"></div></nav></div></div></div>   
<div id="navigation">
<ul>
  <li class="active float-left"><a class="active" href="../views/frmLogin.php">inicio</a>  
  </li>
</ul>
<ul>
<li class="float-left"><a href="#">CARGA DE DATOS</a>
 <ul class="dropdown-content">
  <li><a href="../views/frmFacturasCG.php">Carga de Datos con Sentencia Judicial</a></li>
 </ul>
</li>
  <li class="float-left"><a href="#">LISTADOS</a>
    <ul class="dropdown-content">
     <li><a href="../views/frmFormFacturasCG.php">Listar Formulario Resúmen de Reclamo con Sentencia Judicial</a></li>
     <li><a href="../views/frmListFacturasCG.php">Listar detalle de Reclamo con Sentencia Judicial</a></li>
    </ul>
  </li>
    </ul>
</div>

<!-------------------------------------------------------------------------------------------------->
<!--script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script-->
</header>
<!-- -->
<!--CONTENIDO-->
<div class="row">
 <h3 class="col-md-7 col-sm-10 col-md-offset-3">
 <img class="img-responsive" src="../images/horarios.png" height="318px">
 </h3>
</div><!--FIN CONTENIDO-->
</div>

    </section>

  </main>

  <!--==========footer=================================-->
 <footer>  
    
    <section>      
      <div class="container-footer">
        <div class="row">
                
                <!-- Dirección y Núm -->
                <div class="col-md-4">
                    <div class="footer-headline"><h4>Dirección y Número de Contacto</h4></div>
                    <p>Municipalidad de Resistencia Av. Italia Nº 150 <br> Teléfono de Informes: (362) 4458201.</p>
                    <img src="../images/logo-municipio-verde.png" class="client-logo-footer">
                </div>

                

                <!-- Donde Estamos? -->
                <div class="col-md-5">
                    <div class="footer-headline"><h4>Como Llegar?</h4></div>
                    <div id="mapa">
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1770.2446438431818!2d-58.981944791755865!3d-27.4540227949245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94450cf1aba11591%3A0x14f9437cf41fbd30!2sAv.+Italia+150%2C+H3500CJO+Resistencia%2C+Chaco!5e0!3m2!1ses!2sar!4v1460757666099"
                     width="100%" height="" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
                    </div>
                </div>

        </div>
      
      </div> 
    </section> 

  </footer>
            <div id="container-footer" class="container" style="background: #111;">
              <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom">
                        Todos los derechos reservados. © 2016 Se permite la reproducción del contenido citando la fuente.<a href="#"></a>

                            <div id="scroll-top-top"><a href="#" title="Volver al inicio"></a></div>
                        </div>
                    </div>
                </div>
            </div>

  </div>

  <script src="../js/bootstrap.min.js"></script>
    <script src="../js/tm-scripts.js"></script>    
 


  </body>
</html>