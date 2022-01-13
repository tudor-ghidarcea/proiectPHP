<?php
session_start();
ob_start();
require('fpdf17/fpdf.php');
include("connect.php");
mysqli_select_db($con,'id17950174_casa_de_discuri');


class PDF extends FPDF {
	function Header(){
		$this->SetFont('Arial','B',15);
		
	
		
		$this->Cell(100,10,'export pdf',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',11);
		
		$this->SetFillColor(180,180,255);
		$this->SetDrawColor(180,180,255);
		$this->Cell(25,5,'id_piesa',1,0,'',true);
		$this->Cell(40,5,'Nume piesa',1,0,'',true);
		$this->Cell(40,5,'Durata piesa',1,0,'',true);
		$this->Cell(25,5,'Gen piesa',1,0,'',true);
		$this->Cell(40,5,'Artisti',1,1,'',true);
		
	}
	
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);



$query=mysqli_query($con,"select * from piesa");
while($data=mysqli_fetch_array($query)){
		$pdf->Cell(25,5,$data['id_piesa'],1,0);
		$pdf->Cell(40,5,$data['nume_piesa'],1,0);
		$pdf->Cell(40,5,$data['durata_piesa'],1,0);
		$pdf->Cell(25,5,$data['gen_piesa'],1,0);
		$pdf->Cell(40,5,$data['artisti'],1,1);
};














$pdf->Output();
ob_end_flush();
?>