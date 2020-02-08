<?php 
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
include "config/koneksi.php";

$nik = $_POST['nik'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$tanggal_registrasi = date('Y-m-d');
$cek=mysql_num_rows(mysql_query("SELECT nik FROM registrasi WHERE nik='$nik'"));
// Kalau username sudah ada yang pakai
if ($cek > 0){
    echo"
  <script type=\"text/javascript\">
     alert(\"NIK Sudah Terdaftar, Silakan Konfirmasi Ke Petugas !!!\")
     window.location = \"index.php\"
     ;
     </script>";
}else{
$simpan = mysql_query("INSERT INTO registrasi VALUES('','$nik',NULL,'$tanggal_registrasi','$nama_pasien','$jenis_kelamin','$alamat','Daftar', '1')")or die(mysql_error());

if($simpan){
    echo "<script>
    alert('Registrasi Berhasil, silakan konfirmasi kepetugas untuk mendapatkan kartu pasien');
    window.location = 'index.php';
    </script>
    ";
    }else{
    echo "<script>
    alert('Gagal melakukan registrasi');
    window.location = 'index.php';
    </script>
    ";
}
}
?>