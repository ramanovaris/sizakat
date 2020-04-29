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

$teks = $_POST['date_cetak'];
$date_cetak = explode("/", $teks);
$bulan = $date_cetak[0];
$tahun = $date_cetak[1];

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');
// membuat halaman baru
$pdf->AddPage();

////////////////////////////////////////// Halaman 1


// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(270,7,'BAZNAS Tanah Laut',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(270,7,'TOTAL DISTRIBUSI PER ASHNAP',0,1,'C');


$pdf->Cell(10,7,'',0,1);

// QUERY TOTAL DISTRIBUSI
$query = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun'
") or die(mysql_error());
while($row=mysql_fetch_array($query)){

    $total_distribusi += $row['jumlah_dana'];
}

// QUERY Fakir
$query1 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND golongan = '1'
") or die(mysql_error());
while($row=mysql_fetch_array($query1)){
    $orang_fakir = mysql_num_rows($query1);
    $jumlah_fakir += $row['jumlah_dana'];
}

// QUERY Miskin
$query2 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND golongan = '2'
") or die(mysql_error());
while($row=mysql_fetch_array($query2)){
    $orang_miskin = mysql_num_rows($query2);
    $jumlah_miskin += $row['jumlah_dana'];
}

// QUERY muallaf
$query3 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND golongan = '3'
") or die(mysql_error());
while($row=mysql_fetch_array($query3)){
    $orang_muallaf = mysql_num_rows($query3);
    $jumlah_muallaf += $row['jumlah_dana'];
}

// QUERY Fii Sabilillah
$query4 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND golongan = '4'
") or die(mysql_error());
while($row=mysql_fetch_array($query4)){
    $orang_fii_sabillah = mysql_num_rows($query4);
    $jumlah_fii_sabillah += $row['jumlah_dana'];
}

// QUERY Ibnu Sabil
$query5 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND golongan = '5'
") or die(mysql_error());
while($row=mysql_fetch_array($query5)){
    $orang_ibnu_sabil = mysql_num_rows($query5);
    $jumlah_ibnu_sabil += $row['jumlah_dana'];
}

// QUERY GHARIMIN
$query6 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND golongan = '6'
") or die(mysql_error());
while($row=mysql_fetch_array($query6)){
    $orang_gharimin = mysql_num_rows($query6);
    $jumlah_gharimin += $row['jumlah_dana'];
}

// QUERY RIQAB
$query7 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND golongan = '7'
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

////////////////////////////////////////// Halaman 2 ////////////////////////////////////////////////

////////////////////////////// Query 1. PROGRAM TALA MAKMUR 

// 1. Bantuan Modal Usaha Ekonomi Lemah (Piutang Bergulir)
$query8 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '1' AND sub_program = '1'
") or die(mysql_error());
while($row=mysql_fetch_array($query8)){
    $makmur_1 = mysql_num_rows($query8);
}

// 2. Program Bantuan Dana (Biaya Hidup)
$query9 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '1' AND sub_program = '2'
") or die(mysql_error());
while($row=mysql_fetch_array($query9)){
    $makmur_2 = mysql_num_rows($query9);
}

    $total_mustahik_makmur = $makmur_1 + $makmur_2;

////////////////////////////// Query 2. PROGRAM TALA CERDAS (PENDIDIKAN)

// 1. Bantuan Dana Non Beasiswa
$query10 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '2' AND sub_program = '3'
") or die(mysql_error());
while($row=mysql_fetch_array($query10)){
    $cerdas_3 = mysql_num_rows($query10);
}

// 2. Bantuan Dana Beasiswa
$query11 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '2' AND sub_program = '4'
") or die(mysql_error());
while($row=mysql_fetch_array($query11)){
    $cerdas_4 = mysql_num_rows($query11);
}

// 3. Bantuan Permodalan Keterampilan Sekolah
$query12 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '2' AND sub_program = '5'
") or die(mysql_error());
while($row=mysql_fetch_array($query12)){
    $cerdas_5 = mysql_num_rows($query12);
}

// 4. Bantuan Untuk Guru Sekolah dan tenaga honorer
$query13 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '2' AND sub_program = '6'
") or die(mysql_error());
while($row=mysql_fetch_array($query13)){
    $cerdas_6 = mysql_num_rows($query13);
}

    $total_mustahik_cerdas = $cerdas_3+$cerdas_4+$cerdas_5+$cerdas_6;

////////////////////////////// Query 3. PROGRAM TALA SEHAT

// 1. Bantuan Dana Berobat
$query14 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '3' AND sub_program = '7'
") or die(mysql_error());
while($row=mysql_fetch_array($query14)){
    $sehat_7 = mysql_num_rows($query14);
}

////////////////////////////// Query 4. PROGRAM TALA PEDULI

// 1. Bantuan Dana (Biaya Hidup)
$query15 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '4' AND sub_program = '8'
") or die(mysql_error());
while($row=mysql_fetch_array($query15)){
    $peduli_8 = mysql_num_rows($query15);
}

// 2. Bantuan Bedah Rumah
$query16 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '4' AND sub_program = '9'
") or die(mysql_error());
while($row=mysql_fetch_array($query16)){
    $peduli_9 = mysql_num_rows($query16);
}

// 3. Bantuan Dana Untuk Korban Kebakaran
$query17 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '4' AND sub_program = '10'
") or die(mysql_error());
while($row=mysql_fetch_array($query17)){
    $peduli_10 = mysql_num_rows($query17);
}

// 4. Bantuan Dana Untuk Korban Kebanjiran
$query18 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '4' AND sub_program = '11'
") or die(mysql_error());
while($row=mysql_fetch_array($query18)){
    $peduli_11 = mysql_num_rows($query18);
}

 $total_mustahik_peduli = $peduli_8+$peduli_9+$peduli_10+$peduli_11;

////////////////////////////// Query 5. PROGRAM TALA TAQWA

// 1. Santunan Dana Untuk Kaum Masjid
$query19 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '5' AND sub_program = '12'
") or die(mysql_error());
while($row=mysql_fetch_array($query19)){
    $taqwa_12 = mysql_num_rows($query19);
}

// 2. Bantuan Pengadaan Buku (Al-Quran, Yasin, Dll)
$query20 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '5' AND sub_program = '13'
") or die(mysql_error());
while($row=mysql_fetch_array($query20)){
    $taqwa_13 = mysql_num_rows($query20);
}

// 3. Bantuan Dana Untuk Guru Madrasah
$query21 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '5' AND sub_program = '14'
") or die(mysql_error());
while($row=mysql_fetch_array($query21)){
    $taqwa_14 = mysql_num_rows($query21);
}

// 4. Program bantuan pengadaan perlengkapan
$query22 = mysql_query("SELECT * FROM penyaluran_zakat WHERE month(tanggal)='$bulan' AND year(tanggal)='$tahun' AND jenis_program = '5' AND sub_program = '15'
") or die(mysql_error());
while($row=mysql_fetch_array($query22)){
    $taqwa_15 = mysql_num_rows($query22);
}

 $total_mustahik_taqwa = $taqwa_12+$taqwa_13+$taqwa_14+$taqwa_15;

/////////////////////////////////////////////////

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
$pdf->Cell(30,110,$total_mustahik,1,0,'C');  // Total Mustahik Pada Seluruh Program
$pdf->Cell(30,10,'Jumlah',1,0,'C');
$pdf->Cell(30,10,'Total',1,0,'C');
$pdf->Cell(30,110,$total_distribusi,1,0,'C'); // Total Seluruh Dana Zakat Pada Seluruh Program
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'1. PROGRAM TALA MAKMUR',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,15,$total_mustahik_makmur,1,0,'C'); // Total Mustahik 1. PROGRAM TALA MAKMUR
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,15,'',1,0,'C'); // Total Dana Zakat 1. PROGRAM TALA MAKMUR
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  1. Bantuan Modal Usaha Ekonomi Lemah (Piutang Bergulir)',1,0);
$pdf->Cell(30,5, $makmur_1,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  2. Program Bantuan Dana (Biaya Hidup)',1,0);
$pdf->Cell(30,5, $makmur_2,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'2. PROGRAM TALA CERDAS (PENDIDIKAN)',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,$total_mustahik_cerdas,1,0,'C'); // Total Mustahik 2. PROGRAM TALA CERDAS (PENDIDIKAN)
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,'',1,0,'C'); // Total Dana Zakat 2. PROGRAM TALA CERDAS (PENDIDIKAN)
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  1. Bantuan Dana Non Beasiswa',1,0);
$pdf->Cell(30,5,$cerdas_3,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  2. Bantuan Dana Beasiswa',1,0);
$pdf->Cell(30,5,$cerdas_4,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  3. Bantuan Permodalan Keterampilan Sekolah',1,0);
$pdf->Cell(30,5,$cerdas_5,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  4. Bantuan Untuk Guru Sekolah dan tenaga honorer',1,0);
$pdf->Cell(30,5,$cerdas_6 ,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'3. PROGRAM TALA SEHAT',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,10,$sehat_7,1,0,'C'); // Total Mustahik 3. PROGRAM TALA SEHAT
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,10,'',1,0,'C'); 
$pdf->Cell(30,10,'',1,0,'C'); // Total Dana Zakat 3. PROGRAM TALA SEHAT
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  1. Bantuan Dana Berobat',1,0);
$pdf->Cell(30,5,$sehat_7,1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'4. PROGRAM TALA PEDULI',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,$total_mustahik_peduli,1,0,'C'); // Total Mustahik 4. PROGRAM TALA PEDULI
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,'',1,0,'C'); // Total Dana Zakat 4. PROGRAM TALA PEDULI
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  1. Bantuan Dana (Biaya Hidup)',1,0);
$pdf->Cell(30,5,$peduli_8,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  2. Bantuan Bedah Rumah',1,0);
$pdf->Cell(30,5,$peduli_9,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  3. Bantuan Dana Untuk Korban Kebakaran',1,0);
$pdf->Cell(30,5,$peduli_10,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  4. Bantuan Dana Untuk Korban Kebanjiran',1,0);
$pdf->Cell(30,5,$peduli_11,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'5. PROGRAM TALA TAQWA',1,0);
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,$total_mustahik_taqwa,1,0,'C');  // Total Mustahik 5. PROGRAM TALA TAQWA
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(30,25,'',1,0,'C'); // Total Dana Zakat 5. PROGRAM TALA TAQWA
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  1. Santunan Dana Untuk Kaum Masjid',1,0);
$pdf->Cell(30,5,$taqwa_12,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  2. Bantuan Pengadaan Buku (Al-Quran, Yasin, Dll)',1,0);
$pdf->Cell(30,5,$taqwa_13,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  3. Bantuan Dana Untuk Guru Madrasah',1,0);
$pdf->Cell(30,5,$taqwa_14,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);
$pdf->Cell(105,5,'  4. Program bantuan pengadaan perlengkapan',1,0);
$pdf->Cell(30,5,$taqwa_15,1,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',0,0,'C');
$pdf->Cell(30,5,'',1,0,'C');
$pdf->Cell(0,5,'',0,1);

$pdf->Output();
?>