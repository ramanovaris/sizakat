<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$hapus_poli = mysql_query("DELETE FROM poli WHERE kode_poli='$_GET[kode_poli]'")or die(mysql_error());

if($hapus_poli){
              echo "<script>
    alert('Data Poli Berhasil Dihapus');
    window.location = '../data_poli.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Poli Gagal Dihapus');
    window.location = '../data_poli.php';
    </script>
    ";}
?>