<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$jenis_zakat = $_POST['jenis_zakat'];
$uraian = $_POST['uraian'];
$jumlah = $_POST['jumlah'];
$kode_akun = $_POST['kode_akun'];

$simpan = mysql_query("INSERT INTO pemberi_zakat VALUES('', '$uraian', '$jumlah', NULL, '$jenis_zakat', '$kode_akun')")or die(mysql_error());

if($simpan){
              echo "<script>
    alert('Data Pemberi Zakat Berhasil Disimpan');
    window.location = '../data_pemberi_zakat.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Pemberi Zakat Gagal Disimpan');
    window.location = '../tambah_penerima_zakat';
    </script>
    ";}
?>