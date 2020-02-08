<?php 
session_start();

include "../config/koneksi.php";



require('phpfpdf/fpdf.php');
$q = "SELECT max(kode_pesan) as maxKode FROM pesan_kamar";

// var_dump($q); die();
$h = mysql_query($q);
$d = mysql_fetch_array($h);
$noRm = $d['maxKode'];

$noUrut = (int) substr($noRm, 3,3);
$noUrut++;


$char = "KMR";
$newID = $char. sprintf("%03s", $noUrut);

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
$pdf = new FPDF('L','mm',array(140,140));
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

$query = mysql_query("SELECT pesan_kamar.kode_pesan,pasien.no_rm, pasien.nama_pasien, kamar.no_kamar, kamar.nama, pesan_kamar.tgl_keluar, pesan_kamar.tgl_pesan, pesan_kamar.total_hari, pesan_kamar.total_biaya, pesan_kamar.status FROM pesan_kamar
    JOIN pasien ON pesan_kamar.no_rm=pasien.no_rm
    JOIN kamar ON pesan_kamar.no_kamar=kamar.no_kamar
    WHERE kode_pesan='$_GET[kode_pesan]'")or die(mysql_error());

        while($row=mysql_fetch_array($query)){





//make a dummy empty cell as a vertical spacer


//billing address
$pdf->SetFont('Arial','BU',12);
$pdf->Cell(100 ,5,'RESI PEMESANAN KAMAR',0,1);//end of line
$pdf->Cell(100 ,5,'',0,1);//end of line

$pdf->SetFont('Arial','',7);
$pdf->Cell(45 ,5,'No.Resi :',0,0);
$pdf->SetFont('Arial','I',5);
$pdf->Cell(45 ,5, $newID,0,1);


$pdf->SetFont('Arial','',7);
$pdf->Cell(45 ,5,'Tanggal :',0,0);
$pdf->SetFont('Arial','I',5);
$pdf->Cell(45 ,5,dateBahasaIndo($row['tgl_keluar']),0,1);
$pdf->Cell(100 ,2,'',0,1);//end of li


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NO RM',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5, $row['no_rm'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NAMA PASIEN',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['nama_pasien'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NAMA KAMAR',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['nama'].' ('.$row['no_kamar'].')',0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'TANGGAL MASUK',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,dateBahasaIndo($row['tgl_pesan']),0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'TANGGAL KELUAR',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,dateBahasaIndo($row['tgl_keluar']),0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'TOTAL HARI',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['total_hari'].' Hari',0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'TOTAL BIAYA',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,$row['total_biaya'],0,1);
$pdf->Cell(100 ,2,'',0,1);//end of line

$pdf->SetFont('Arial','B',10);
$pdf->Cell(120,5,'Petugas,                                  Pasien,',0,1,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(120,5,$_SESSION['nama_petugas'] . '                                         '  .  $row['nama_pasien'],0,1,'C');



}

$pdf->Output();
?>