<?php
	include 'plantilla.php';
	require 'conexion2.php';
	
	$query = "SELECT Nombre, Direccion, Edad, Motivo, FechaYHora, Hora FROM cita";
	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	
	$pdf->Cell(42,6,'Nombre',1,0,'C',1);
	$pdf->Cell(60,6,'Direccion',1,0,'C',1);
	$pdf->Cell(13,6,'Edad',1,0,'C',1);
	$pdf->Cell(35,6,'Motivo',1,0,'C',1);
	$pdf->Cell(24,6,'Fecha',1,0,'C',1);
	$pdf->Cell(16,6,'Hora',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(42,6,utf8_decode($row['Nombre']),1,0,'C');
		$pdf->Cell(60,6,utf8_decode($row['Direccion']),1,0,'C');
		$pdf->Cell(13,6,utf8_decode($row['Edad']),1,0,'C');
		$pdf->Cell(35,6,utf8_decode($row['Motivo']),1,0,'C');
		$pdf->Cell(24,6,utf8_decode($row['FechaYHora']),1,0,'C');
		$pdf->Cell(16,6,utf8_decode($row['Hora']),1,1,'C');
	}


	$pdf->Output();


?>
