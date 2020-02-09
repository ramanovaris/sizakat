<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$hapus = mysql_query("DELETE FROM petugas WHERE id_petugas='$_GET[id]'")or die(mysql_error());

if($hapus){
    echo "<script>
        alert('Data  Berhasil Dihapus');
            window.location = '../data_petugas.php';
        </script>";
        }else{
              echo "<script>
    alert('Data  Gagal Dihapus');
    window.location = '../data_petugas.php';
    </script>
    ";}
?>