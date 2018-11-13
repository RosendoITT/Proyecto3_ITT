<?php
	include 'planti.php';
	require 'conexion2.php';
	
	$query = "SELECT Notas FROM nota";
	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	
	$pdf->Cell(183,6,'Notas',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(183,6,utf8_decode($row['Notas']),1,1,'C');
		
	}


	$pdf->Output();


?>
