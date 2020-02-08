<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";


$nama_poli = $_POST['nama_poli'];



$simpan_poli = mysql_query("INSERT INTO poli VALUES('','$nama_poli')")or die(mysql_error());

if($simpan_poli){
              echo "<script>
    alert('Data Poli Berhasil Disimpan');
    window.location = '../data_poli.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Poli Gagal Disimpan');
    window.location = '../tambah_poli.php';
    </script>
    ";}
?>