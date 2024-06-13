<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION == false){
    header("Location: ../index.php");
}

include_once("../controller/cidadeController.php");
require_once("../fpdf/fpdf.php");

$pdf = new FPDF("P", "mm", "A4");
$pdf->SetFont("arial","", 10 );
$pdf->SetTextColor(0,0,0);
$pdf->SetY("-1");
$pdf->Cell(0,0,'',0,1,'L'); 

$cidades = new CidadeController();
$cidades = $cidades->consultarCidades();

if(!$cidades){

    $pdf->SetX(40);
    $pdf->SetY(100);
    $pdf->MultiCell(130, 10, ("Nenhuma Cidade Cadastrada!"), 2, "C",);

}else{

    $pdf->SetFont('courier','B',16);

    $pdf->SetY("30");
            $pdf->SetX("30");
            $pdf->Cell(30,10,('Id'), 1, 1, "C");

            $pdf->SetY("30");
            $pdf->SetX("60");
            $pdf->Cell(120,10,'Nome da Cidade',1,1,'L'); 

    $pdf->SetFont('arial','',12);	
    $pdf->SetTextColor(0,0,0);
    $y = 40;

    foreach($cidades as $cid){
       
        $pdf->SetY($y);
        $pdf->SetX("30");
        $pdf->Cell(30,10,$cid['id'],1,1, "C");

        $pdf->SetY($y);
        $pdf->SetX("60");
        $pdf->Cell(120,10,utf8_decode($cid['nome']),1,1,'L'); 

        $y += 10;
    }
}
$pdf->Output("relatorioCidade.pdf", "I");


