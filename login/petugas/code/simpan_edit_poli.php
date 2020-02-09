<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";


$nama_poli = $_POST['nama_poli'];
$kode_poli = $_POST['kode_poli'];

$simpan_poli = mysql_query("UPDATE poli SET nama_poli='$nama_poli' WHERE kode_poli='$kode_poli'")or die(mysql_error());

if($simpan_poli){
              echo "<script>
    alert('Data Poli Berhasil Diedit');
    window.location = '../data_poli.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Poli Gagal Diedit');
    window.location = '../edit_poli.php';
    </script>
    ";}
?>