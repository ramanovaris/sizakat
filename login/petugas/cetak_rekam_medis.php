<?php 
session_start();

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
$pdf = new FPDF('L','mm',array(100,140));
// membuat halaman baru
$pdf->AddPage();


//set font to arial, bold, 14pt




//Cell(width , height , text , border , end line , [align] )

$pdf->image('logo2.png',10,6,30);
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Cell(45 ,5,'Alamat
Jalan A. Yani, Angsau, Pelaihari, Kabupaten Tanah Laut Kalimantan Selatan 70812',0,0);
$pdf->Cell(2,2,'',0,1);
$pdf->Cell(45 ,5,'Telpon (0512) 2021002',0,0);

$pdf->Cell(5,5,'',0,1);
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$query = mysql_query("SELECT rekam_medis.jaminan,rekam_medis.no_rm,rekam_medis.kode_rm,rekam_medis.tanggal_meminjam, rekam_medis.tanggal_mengembalikan, rekam_medis.status, petugas.nama_petugas, dokter.nama_dokter, perawat.nama_perawat, poli.nama_poli, pasien.nama_pasien FROM rekam_medis
    LEFT JOIN petugas ON rekam_medis.nik_petugas=petugas.nik_petugas
    JOIN dokter ON rekam_medis.nik_dokter=dokter.nik_dokter
    JOIN perawat ON rekam_medis.nik_perawat=perawat.nik_perawat
    JOIN poli ON rekam_medis.kode_poli=poli.kode_poli
    JOIN pasien ON rekam_medis.no_rm=pasien.no_rm WHERE rekam_medis.no_rm='$_GET[no_rm]' AND kode_rm='$_GET[kode_rm]'")or die(mysql_error());
        while($row=mysql_fetch_array($query)){





//make a dummy empty cell as a vertical spacer
// $pdf->Cell(189 ,10,'',0,1);//end of line

//billing address
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100 ,5,'PEMINJAMAN REKAM MEDIS',0,1);//end of line
$pdf->Cell(100 ,5,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NO RM',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5, $row['no_rm'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'TGL. DIPINJAM',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,dateBahasaIndo($row['tanggal_meminjam']),0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NAMA PEMINJAM',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['nama_pasien'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'POLI',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['nama_poli'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'DOKTER',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['nama_dokter'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'JAMINAN',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['jaminan'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line



}

$pdf->Output();
?>