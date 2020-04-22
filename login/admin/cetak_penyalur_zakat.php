<?php 
session_start();
error_reporting(0);

include "../config/koneksi.php";

require('phpfpdf/fpdf.php');
function dateBahasaIndo($tgl_isi_kuis){

$bulan=array(

                '01'=>'Januari',
                '02'=>'Februari',
                '03'=>'Maret',
                '04'=>'April',
                '05'=>'Mei',
                '06'=>'Juni',
                '07'=>'Juli',
                '08'=>'Agustus',
                '09'=>'September',
                '10'=>'Oktober',
                '11'=>'November',
                '12'=>'Desember',
            );

$pecah=explode('-',$tgl_isi_kuis);

$tgl=$pecah[2];
$bln=$pecah[1];
$thn=$pecah[0];
return $tgl.' '.$bulan[$bln].' '.$thn;
}
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');
// membuat halaman baru
$pdf->AddPage();


// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(270,7,'BAZNAS Tanah Laut',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'TOTAL DISTRIBUSI PER ASHNAP',0,1,'C');


$pdf->Cell(10,7,'',0,1);

// QUERY TOTAL DISTRIBUSI
$query = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020'
") or die(mysql_error());
while($row=mysql_fetch_array($query)){

    $total_distribusi += $row['jumlah_dana'];
}

// QUERY Fakir
$query1 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020' AND golongan = 'Fakir'
") or die(mysql_error());
while($row=mysql_fetch_array($query1)){
    $orang_fakir = mysql_num_rows($query1);
    $jumlah_fakir += $row['jumlah_dana'];
}

// QUERY Miskin
$query2 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020' AND golongan = 'miskin'
") or die(mysql_error());
while($row=mysql_fetch_array($query2)){
    $orang_miskin = mysql_num_rows($query2);
    $jumlah_miskin += $row['jumlah_dana'];
}

// QUERY muallaf
$query3 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020' AND golongan = 'muallaf'
") or die(mysql_error());
while($row=mysql_fetch_array($query3)){
    $orang_muallaf = mysql_num_rows($query3);
    $jumlah_muallaf += $row['jumlah_dana'];
}

// QUERY Fii Sabilillah
$query4 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020' AND golongan = 'fii sabillah'
") or die(mysql_error());
while($row=mysql_fetch_array($query4)){
    $orang_fii_sabillah = mysql_num_rows($query4);
    $jumlah_fii_sabillah += $row['jumlah_dana'];
}

// QUERY Ibnu Sabil
$query5 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020' AND golongan = 'ibnu sabil'
") or die(mysql_error());
while($row=mysql_fetch_array($query5)){
    $orang_ibnu_sabil = mysql_num_rows($query5);
    $jumlah_ibnu_sabil += $row['jumlah_dana'];
}

// QUERY GHARIMIN
$query6 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020' AND golongan = 'gharimin'
") or die(mysql_error());
while($row=mysql_fetch_array($query6)){
    $orang_gharimin = mysql_num_rows($query6);
    $jumlah_gharimin += $row['jumlah_dana'];
}

// QUERY RIQAB
$query7 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='04' AND year(tanggal)='2020' AND golongan = 'riqab'
") or die(mysql_error());
while($row=mysql_fetch_array($query7)){
    $orang_riqab = mysql_num_rows($query7);
    $jumlah_riqab += $row['jumlah_dana'];
}

$total_mustahik = $orang_fakir + $orang_miskin + $orang_muallaf + $orang_fii_sabillah + $orang_ibnu_sabil + $orang_gharimin + $orang_riqab;


$pdf->SetFont('Arial','B',10);
$pdf->Cell(70,20,'URAIAN',1,0,'C');
$pdf->Cell(210,10,'DANA ZAKAT',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(70,5,'',0,0);
$pdf->Cell(30,10,'FAKIR',1,0,'C');
$pdf->Cell(30,10,'MISKIN',1,0,'C');
$pdf->Cell(30,10,'MUALLAF',1,0,'C');
$pdf->Cell(30,10,'FII SABILILLAH',1,0,'C');
$pdf->Cell(30,10,'IBNU SABIL',1,0,'C');
$pdf->Cell(30,10,'GHARIMIN',1,0,'C');
$pdf->Cell(30,10,'RIQAB',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(70,10,'JUMLAH',1,0,'C');
$pdf->Cell(30,10,$jumlah_fakir,1,0,'C');
$pdf->Cell(30,10,$jumlah_miskin,1,0,'C');
$pdf->Cell(30,10,$jumlah_muallaf,1,0,'C');
$pdf->Cell(30,10,$jumlah_fii_sabillah,1,0,'C');
$pdf->Cell(30,10,$jumlah_ibnu_sabil,1,0,'C');
$pdf->Cell(30,10,$jumlah_gharimin,1,0,'C');
$pdf->Cell(30,10,$jumlah_riqab,1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(70,10,'TOTAL DISTRIBUSI',1,0,'C');
$pdf->Cell(210,10, $total_distribusi,1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(70,10,'Jumlah Mustahik',1,0,'C');
$pdf->Cell(30,10,$orang_fakir,1,0,'C');
$pdf->Cell(30,10,$orang_miskin,1,0,'C');
$pdf->Cell(30,10,$orang_muallaf,1,0,'C');
$pdf->Cell(30,10,$orang_fii_sabillah,1,0,'C');
$pdf->Cell(30,10,$orang_ibnu_sabil,1,0,'C');
$pdf->Cell(30,10,$orang_gharimin,1,0,'C');
$pdf->Cell(30,10,$orang_riqab,1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(70,10,'Total Mustahik',1,0,'C');
$pdf->Cell(210,10,$total_mustahik,1,0,'C');

$pdf->AddPage();

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(270,7,'BAZNAS Tanah Laut',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'TOTAL DISTRIBUSI PER PROGRAM',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(105,10,'JENIS PROGRAM',1,0,'C');
$pdf->Cell(30,10,'Jumlah Mustahik',1,0,'C');
$pdf->Cell(30,10,'Total Mustahik',1,0,'C');
$pdf->Cell(30,70,'',1,0,'C');
$pdf->Cell(30,10,'Jumlah',1,0,'C');
$pdf->Cell(30,10,'Total',1,0,'C');
$pdf->Cell(30,70,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'1. PROGRAM TALA MAKMUR',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  1. Bantuan Modal Usaha Ekonomi Lemah (Piutang Bergulir)',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  2. Program Bantuan Dana (Biaya Hidup)',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'2. PROGRAM TALA CERDAS (PENDIDIKAN)',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  1. Bantuan Dana Non Beasiswa',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  2. Bantuan Dana Beasiswa',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  3. Bantuan Permodalan Keterampilan Sekolah',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  4. Bantuan Untuk Guru Sekolah dan tenaga honorer',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'3. PROGRAM TALA SEHAT',1,0);
// $pdf->Cell(30,10,'FAKIR',1,0,'C');
// $pdf->Cell(30,10,'MISKIN',1,0,'C');
// $pdf->Cell(30,10,'MUALLAF',1,0,'C');
// $pdf->Cell(30,10,'FII SABILILLAH',1,0,'C');
// $pdf->Cell(30,10,'IBNU SABIL',1,0,'C');
// $pdf->Cell(30,10,'GHARIMIN',1,0,'C');
// $pdf->Cell(30,10,'RIQAB',1,0,'C');
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(70,10,'JUMLAH',1,0,'C');
// $pdf->Cell(30,10,$jumlah_fakir,1,0,'C');
// $pdf->Cell(30,10,$jumlah_miskin,1,0,'C');
// $pdf->Cell(30,10,$jumlah_muallaf,1,0,'C');
// $pdf->Cell(30,10,$jumlah_fii_sabillah,1,0,'C');
// $pdf->Cell(30,10,$jumlah_ibnu_sabil,1,0,'C');
// $pdf->Cell(30,10,$jumlah_gharimin,1,0,'C');
// $pdf->Cell(30,10,$jumlah_riqab,1,0,'C');
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(70,10,'TOTAL DISTRIBUSI',1,0,'C');
// $pdf->Cell(210,10, $total_distribusi,1,0,'C');
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(70,10,'Jumlah Mustahik',1,0,'C');
// $pdf->Cell(30,10,$orang_fakir,1,0,'C');
// $pdf->Cell(30,10,$orang_miskin,1,0,'C');
// $pdf->Cell(30,10,$orang_muallaf,1,0,'C');
// $pdf->Cell(30,10,$orang_fii_sabillah,1,0,'C');
// $pdf->Cell(30,10,$orang_ibnu_sabil,1,0,'C');
// $pdf->Cell(30,10,$orang_gharimin,1,0,'C');
// $pdf->Cell(30,10,$orang_riqab,1,0,'C');
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(0,5,'',0,1);
// $pdf->Cell(70,10,'Total Mustahik',1,0,'C');
// $pdf->Cell(210,10,$total_mustahik,1,0,'C');

$pdf->Output();
?>