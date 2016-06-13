<?php
require('../fpdf/fpdf.php');
require("../Conexion/Conexion.php");
//require('conexion.php');
$conexion=Conectarse();
$id=$_POST['bsprov'];
$dni=$_POST['nrodni'];

$conprov=mysqli_query($conexion,"select razonsocial from acreedoreconomia where nroprov='".$id."';");
$fil=mysqli_fetch_array($conprov);
$razon=$fil['razonsocial'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Logo
    $this->Image('../images/logoprint.jpg',10,8,33,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    //$this->Cell(30,10,'Title',1,0,'C');
    $this->Cell(70);
    $this->SetFont('Arial','',9);
    $this->Cell(50,10,'Fecha: '.date('d-m-Y').'',0);
    $this->Ln(5);
	$this->Ln(10);
    $this->Cell(45);
    //setea fuente de titulo
    $this->SetFont('Arial','B',15);
    $this->SetFont('','U');
    //$this->Cell(100,10,'Lista de Facturas sin Gestion Judicial ',0,0,'C'); $this->Ln(10);
	$this->Cell(100,10,'ANEXO III ',0,0,'C'); $this->Ln(10);$this->SetFont('Arial','',9);
	$this->Cell(200,10,'PLANILLA DE ORDENAMIENTO DE SENTENCIAS ',0,0,'C'); $this->Ln(5);
	
	 $this->SetFont('','');
    // Salto de línea
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}

public function sanitizarFecha($fecha)
{
    //$date = date_create_from_format('d-m-Y', $fecha);
    $date = date_create($fecha);
    return date_format($date,'Y-m-d');
}
}


// Creación del objeto de la clase heredada
//$pdf = new PDF();//hoja vertical
$pdf=new PDF('L','mm','A4');//hoja horizontal
$pdf->AliasNbPages();
$pdf->AddPage();

//cabecera de tabla
$pdf->SetFont('Times','',6);
//$pdf->Cell(15,8,'Fecha Reclamo',1,0,'C');
$pdf->Cell(25,8,'Proveedor',1,0,'C');
$pdf->Cell(30,8,'Caratula',1,0,'C');
$pdf->Cell(15,8,'Nº.Expediente',1,0,'C');
$pdf->Cell(20,8,'Juzgado',1,0,'C');
$pdf->Cell(27,8,'Monto $',1,0,'C');
$pdf->Cell(23,8,'Causa $',1,0,'C');
$pdf->Cell(20,8,'Profesional(1) $',1,0,'C');
$pdf->Cell(20,8,'Profesional(2)',1,0,'C');
$pdf->Cell(23,8,'Honorarios $',1,0,'C');
$pdf->Cell(20,8,'Costas $',1,0,'C');
$pdf->Cell(20,8,'Total Deuda $',1,0,'C');

$pdf->Ln(8);
//fin cabecera de tabla

$consulta = mysqli_query($conexion,"SELECT * FROM acreenciacongestion where (nroproveedor='".$id."') and(imprimio='NO') ORDER BY idacreenciacongestion ASC;");
//$consulta = mysqli_query($conexion,"SELECT * FROM acreenciasingestion where imprimio='NO' ORDER BY idacreenciasingestion ASC;");

$tmontof=0.00;$thono=0.00;$tmontot=0.00;$conteo=0;$tcost=0.00;	
while($fila = mysqli_fetch_array($consulta)){
	// $pdf->Cell(15,8,$fila['fechacarga'],1,0,'C');
    $pdf->Cell(25,8,$fila['nroproveedor'],1,0,'C');
    $pdf->Cell(30,8,$fila['caratula'],1,0,'C');
    $pdf->Cell(15,8,$fila['expediente'],1,0,'C');
    $pdf->Cell(20,8,$fila['juzgado'],1,0,'C');
    $pdf->Cell(27,8,$fila['monto'],1,0,'C');
    $pdf->Cell(23,8,$fila['causa'],1,0,'C');
    $pdf->Cell(20,8,$fila['profesional1'],1,0,'C');
    $pdf->Cell(20,8,$fila['profesional2'],1,0,'C');
    $pdf->Cell(23,8,$fila['honorarios'],1,0,'C');
    $pdf->Cell(20,8,$fila['costas'],1,0,'C');
    $pdf->Cell(20,8,$fila['totaldeuda'],1,0,'C');
    $pdf->Ln(8);$conteo++;
    $tmontof=$tmontof+$fila['monto'];$thono=$thono+$fila['honorarios'];
    $tcost=$tcost+$fila['costas'];
	$tmontot=$tmontot+$fila['totaldeuda'];
}

//TOTALES
$pdf->Ln(10);
$pdf->SetFont('Times','B',10);

$pdf->Cell(75,8,'Proveedor',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$razon,1,1,'C');


$pdf->Cell(75,8,'Cantidad de Documentos',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$conteo,1,1,'C');

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Monto de Documentos Reclamadas $',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$tmontof,1,1,'C');

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Honorarios $',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$thono,1,1,'C');

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Costas $',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$tcost,1,1,'C');

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Total Deuda Reclamada $',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$tmontot,1,1,'C');

	
$pdf->Output('Listado de Documentos Reclamadas','I');

?>