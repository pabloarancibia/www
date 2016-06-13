<?php
require('../fpdf/fpdf.php');
require("../Conexion/Conexion.php");
$conexion=Conectarse();
/*
$id=$_POST['bsprov'];
$dni=$_POST['nrodni'];

$queryp="select a.razonsocial,a.cuit,a.domicilio,a.tel1,a.tel2,a.email,b.codpostal from acreedoreconomia a, acreedorcompensacion b where a.nroprov='".$id."' and a.nroprov=b.provcompe ;";
$conprov=mysqli_query($conexion,$queryp);
$fil=mysqli_fetch_array($conprov);
$razon=$fil['razonsocial'];$cuit=$fil['cuit'];$domicilio=$fil['domicilio'];$tel1=$fil['tel1'];
$tel2=$fil['tel2'];$email=$fil['email'];$cp=$fil['codpostal'];
*/

class PDF extends FPDF
{
// Cabecera de página
function Header()
{

    // Logo
 //   $this->Image('../images/pp.png',10,8,10,10);
    // Arial bold 15
    $this->SetFont('Arial','',7);
    // Movernos a la derecha
    //$this->Cell(80);
   	
//    $this->Cell(45);
  //	 $this->Ln(7);
}
}


// Creación del objeto de la clase heredada
$pdf = new PDF();//hoja vertical
//$pdf=new PDF('L','mm','A4');//hoja horizontal
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Cell(10,8,$pdf->Image('../images/pp.png'),8,8);
$pdf->Cell(60,15,'Municipalidad de la Ciudad de Resistencia ',1,'T','C');
$pdf->Cell(90,15,'SOLICITUD DE MATERIALES Y SERVICIOS',1,'T','C');
$pdf->Cell(40,15,'NUMERO / FECHA',1,'T','C'); $pdf->Ln(15);
$pdf->Cell(40,10,'IMPUTACION/CODIGO DE OFIC.',1,'T','C');
$pdf->Cell(150,10,'Oficina Solicitante: ',1,'T','L'); $pdf->Ln(10);
$pdf->Cell(40,10,'',1,'B','C');
$pdf->Cell(150,10,'Destino de los Materiales:',1,'T','L');
$pdf->Ln(10);
$pdf->Cell(40,10,'Partida',1,'LR','C');
$pdf->Cell(10,10,'Nro.',1,'T','C');$pdf->Cell(10,10,'Cant.',1,'T','C');
$pdf->Cell(100,10,'DESCRIPCION DE BIENES/SERVICIOS ',1,'T','C');
$pdf->Cell(30,10,'IMPORTE $ ',1,'T','C');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','C');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','C');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','C');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','C');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
$pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','C');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','C');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
 $pdf->Ln(10);
 $pdf->Cell(40,10,'',1,'LR','C');
$pdf->Cell(10,10,'',1,'T','C');$pdf->Cell(10,10,'',1,'T','C');
$pdf->Cell(100,10,'',1,'T','C');
$pdf->Cell(30,10,'',1,'T','C');
 $pdf->Ln(10);

/*
$queryD="SELECT * FROM acreenciacompensacion where (provcom='".$id."') and(imprimio='NO') ORDER BY idacompensa ASC;";
$consulta = mysqli_query($conexion,$queryD);
$tmontof=0.00;$conteo=0;	
$pdf->SetFont('Times','B',10);
while($fila = mysqli_fetch_array($consulta)){
	$pdf->Cell(100,10,utf8_decode($fila['sujetop']),0,0,'C');
    $pdf->Cell(50,10,utf8_decode($fila['tributop']),0,0,'C');
    $pdf->Cell(40,10,number_format($fila['importep'],2,",","."),0,0,'R');
    //$pdf->Cell(20,8,$fila['documento'],1,0,'C');
    $pdf->Ln(5);$conteo++;
    $tmontof=$tmontof+$fila['importep'];
}

//TOTALES
$pdf->Ln(7);
$pdf->SetFont('Times','B',10);
$pdf->Cell(150,10,'Total Solicitado a Compensar $:',1,'T','C');
$pdf->Cell(40,10,number_format($tmontof,2,",","."),1,'T','R');$pdf->Ln(10);
$queryD2="SELECT documento FROM acreenciacompensacion where (provcom='".$id."') and(imprimio='NO') ORDER BY idacompensa ASC;";
$consulta2 = mysqli_query($conexion,$queryD2);

$pdf->Cell(200,10,'DOCUMENTACION APORTADA',0,0,'C'); $pdf->Ln(7);
while($fila2 = mysqli_fetch_array($consulta2)){
	$pdf->Cell(190,10,utf8_decode($fila2['documento']),0,0,'L');
    $pdf->Ln(5);
}

$pdf->Ln(7); 
$pdf->SetFont('Arial','',7);
$pdf->Cell(0,8,utf8_decode('         Mediante la presente el interesado SOLICITA  a la MUNICIPALIDAD de RESISTENCIA la compensación de los tributos que se detallan con las deudas que el MUNICIPIO'),0,1,'L');
$pdf->Cell(0,8,utf8_decode('          mantiene con el solicitante.Los sujetos pasivos aceptan el pago subrogado efectuado por el SOLICITANTE sujeto a compensación.'),0,1,'L');
$pdf->Ln(10);$pdf->SetFont('Arial','',9);
$pdf->Cell(90,10,'                             ____________',0,0,'L'); 
$pdf->Cell(90,10,'__________________',0,0,'R');$pdf->Ln(10); 
$pdf->Cell(90,10,'Firma del SOLICITANTE ',0,0,'C'); 
$pdf->Cell(90,10,'Firma SUJETOS PASIVOS',0,0,'R'); 
	*/



$pdf->Output('Formulario de Pedido de Materiales','I');

?>