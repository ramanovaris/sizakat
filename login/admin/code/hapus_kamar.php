<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$hapus = mysql_query("DELETE FROM Kamar WHERE no_kamar='$_GET[no_kamar]'")or die(mysql_error());

if($hapus){
    echo "<script>
        alert('Data Kamar Berhasil Dihapus');
            window.location = '../data_kamar.php';
        </script>";
        }else{
              echo "<script>
    alert('Data Kamar Gagal Dihapus');
    window.location = '../data_kamar.php';
    </script>
    ";}
?>