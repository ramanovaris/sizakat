<?php 
session_start();
error_reporting(0);

include "../config/koneksi.php";

require('phpfpdf/fpdf.php');



$teks = $_POST['date_cetak'];
$date_cetak = explode("/", $teks);
$bulan = $date_cetak[0];
$tahun = $date_cetak[1];

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');
// membuat halaman baru
$pdf->AddPage();


// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(270,7,'BAZNAS Tanah Laut',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'DATA PENERIMA ZAKAT',0,1,'C');


$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,10,'Tanggal',1,0,'C');
$pdf->Cell(85,10,'Jenis Zakat',1,0,'C');
$pdf->Cell(130,10,'Uraian',1,0,'C');
$pdf->Cell(30,10,'Jumlah',1,1,'C');

$pdf->SetFont('Arial','',10);


$query = mysql_query("SELECT * FROM pemberi_zakat JOIN  jenis_zakat ON pemberi_zakat.jenis_zakat=jenis_zakat.id_jenis_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun'")or die(mysql_error());
while ($row = mysql_fetch_array($query)){
    $pdf->Cell(30,6,date('d F Y',strtotime($row['tanggal'])),1,0);
    $pdf->Cell(85,6,$row['nama_zakat'],1,0);
    $pdf->Cell(130,6,$row['uraian'],1,0);
    $pdf->Cell(30,6,'Rp. '.number_format($row['jumlah'], 0, ".", "."),1,1); 
}

$pdf->Output();



 ?>