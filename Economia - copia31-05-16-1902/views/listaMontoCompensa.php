<?php
require('../fpdf/fpdf.php');
require("../Conexion/Conexion.php");
$conexion=Conectarse();
//
$query="select sum(b.importep) as mf, b.provcom, ac.razonsocial from acreenciacompensacion b, acreedoreconomia ac where (b.provcom=ac.nroprov)  group by b.provcom order by mf desc ;";
$consulta=mysqli_query($conexion,$query);
//$fil=mysqli_fetch_array($consulta);
//$razon=$fil['razonsocial'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
	
    // Logo
    $this->Image('../images/logo2.jpg',10,8,45,20);
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
    $this->Cell(100,10,'Lista de Montos Solicitados para Compensar',0,0,'C'); $this->Ln(10);
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
$pdf = new PDF();//hoja vertical
//$pdf=new PDF('L','mm','A4');//hoja horizontal
$pdf->AliasNbPages();
$pdf->AddPage();

//cabecera de tabla
$pdf->SetFont('Times','',6);
//$pdf->Cell(15,8,'Fecha Reclamo',1,0,'C');
$pdf->Cell(25,8,'Proveedor',1,0,'C');
$pdf->Cell(90,8,'Razon Social',1,0,'C');
$pdf->Cell(40,8,'Monto $',1,0,'C');
$pdf->Ln(8);
//fin cabecera de tabla

$tmontof=0.00;$tpagp=0.00;$tmontot=0.00;$conteo=0;	
while($fila = mysqli_fetch_array($consulta)){
	$pdf->Cell(25,8,$fila['provcom'],1,0,'C');
    $pdf->Cell(90,8,utf8_decode($fila['razonsocial']),1,0,'C');
    $pdf->Cell(40,8,number_format($fila['mf'],2,",","."),1,0,'R');
    
    $pdf->Ln(8);$conteo++;
    $tmontof=$tmontof+$fila['mf'];
}

//TOTALES
$pdf->Ln(10);

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Cantidad de Proveedores:',0,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$conteo,0,1,'R');

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Monto de Documentos para Compensar $',0,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,number_format($tmontof,2,",","."),0,1,'R');

$pdf->Output('Listado de Documentos Reclamadas','I');


?>