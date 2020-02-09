<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$hapus = mysql_query("DELETE FROM pemberi_zakat WHERE id='$_GET[id]'")or die(mysql_error());

if($hapus){
    echo "<script>
        alert('Data Pemberi Zakat Berhasil Dihapus');
            window.location = '../data_pemberi_zakat.php';
        </script>";
        }else{
              echo "<script>
    alert('Data Pemberi Zakat Gagal Dihapus');
    window.location = '../data_pemberi_zakat.php';
    </script>
    ";}
?>