<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$hapus = mysql_query("DELETE FROM penyaluran_zakat WHERE id='$_GET[id]'")or die(mysql_error());

if($hapus){
    echo "<script>
        alert('Data Penyalur Zakat Berhasil Dihapus');
            window.location = '../data_penyalur_zakat.php';
        </script>";
        }else{
              echo "<script>
    alert('Data Penyalur Zakat Gagal Dihapus');
    window.location = '../data_penyalur_zakat.php';
    </script>
    ";}
?>