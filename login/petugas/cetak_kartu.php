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
$pdf = new FPDF('L','mm',array(80,120));
// membuat halaman baru
$pdf->AddPage();

//set font to arial, bold, 14pt




//Cell(width , height , text , border , end line , [align] )

$pdf->image('logo2.png',10,2,100,12);
$pdf->Cell(5,5,'',0,1);
$pdf->SetFont('Arial','',5);
$pdf->Cell(10 ,5,'Alamat
Jalan A. Yani, Angsau, Pelaihari, Kabupaten Tanah Laut Kalimantan Selatan 70812',0,0);
$pdf->Cell(2,2,'',0,1);
$pdf->Cell(45 ,5,'Telpon (0512) 2021002',0,0);

$pdf->Cell(100 ,5,'',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->Line(0,21,120,21);
$pdf->SetFont('Arial','',12);

$query = mysql_query("SELECT registrasi.nik,pasien.no_rm, pasien.no_rm, pasien.nama_pasien, pasien.jenis_kelamin, pasien.alamat, registrasi.tanggal_registrasi FROM pasien
    JOIN registrasi ON pasien.no_rm=registrasi.no_rm WHERE registrasi.status='Pasien' AND pasien.no_rm='$_GET[no_rm]'")or die(mysql_error());
while($row=mysql_fetch_array($query)){





//make a dummy empty cell as a vertical spacer
$pdf->Cell(100 ,2,'',0,1);//end of line

//billing address
$pdf->SetFont('Arial','B',12);
$pdf->Cell(100 ,5,'KARTU BEROBAT',0,1,'C');//end of line
$pdf->Cell(100 ,5,'',0,1);//end of line


$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NO RM',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5, ': '.$row['no_rm'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'NAMA PASIEN',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,': '.$row['nama_pasien'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'JENIS KELAMIN',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,': '.$row['jenis_kelamin'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'ALAMAT',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,': '.$row['alamat'],0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(45 ,5,'TANGGAL REGISTRASI',0,0);
$pdf->SetFont('Arial','I',10);
$pdf->Cell(90 ,5,': '.dateBahasaIndo($row['tanggal_registrasi']),0,1);
}

$pdf->Output();
?>