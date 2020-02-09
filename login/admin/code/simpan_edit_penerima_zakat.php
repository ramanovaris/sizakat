<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$id = $_POST['id'];
$jenis_zakat = $_POST['jenis_zakat'];
$uraian = $_POST['uraian'];
$jumlah = $_POST['jumlah'];
$kode_akun = $_POST['kode_akun'];

$edit= mysql_query("UPDATE pemberi_zakat SET uraian='$uraian', jumlah='$jumlah', jenis_zakat='$jenis_zakat', kode_akun='$kode_akun' WHERE id='$id'")or die(mysql_error());

if($edit){
              echo "<script>
    alert('Data Pemberi Zakat Berhasil Diedit');
    window.location = '../data_pemberi_zakat.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Pemberi Zakat Gagal Diedit');
    window.location = '../edit_pemberi_zakat.php?id=$id';
    </script>
    ";}
?>