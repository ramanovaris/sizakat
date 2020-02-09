<?php 
session_start();
include "../config/koneksi.php";

$no_rm =$_POST['no_rm'];
$nik_dokter = $_POST['nik_dokter'];
$nik_perawat = $_POST['nik_perawat'];
$kode_poli =$_POST['kode_poli'];
$tanggal = date("y-m-d");
$jaminan = $_POST['jaminan'];
$jenis_perawatan = $_POST['jenis_perawatan'];

// $kode_akun = $_SESSION['kode_akun'];
// $petugas = mysql_query("SELECT * FROM `petugas` WHERE kode_akun='$kode_akun'");
// while($k = mysql_fetch_array($petugas)){
//     $nik_petugas = $k['nik_petugas'];
// }

$simpan_rm = mysql_query("INSERT INTO rekam_medis VALUES('',NULL,'$nik_dokter','$nik_perawat','$kode_poli','$no_rm','$tanggal', NULL, 'Sedang Dipinjam','$jaminan','$jenis_perawatan')")or die(mysql_error());

 


if($simpan_rm){
    
    $no_kamar = $_POST['no_kamar'];
    $no_rm = $_POST['no_rm'];

    $simpan = mysql_query("INSERT INTO pesan_kamar VALUES('','$no_kamar','$no_rm','$tanggal',NULL,NULL,NULL,'Dipesan','0')")or die(mysql_error());

              echo "<script>
            alert('Data Rekam Medis Berhasil Disimpan');
            window.location = '../data_rekam_medis.php?status_pinjam=Sedang+Dipinjam';
             </script>
    ";
            }else{
              echo "<script>
              alert('Data Rekam Medis Gagal Disimpan');
              window.location = '../tambah_rekam_medis.php';
             </script>";
         }
?>