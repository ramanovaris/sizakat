<?php
date_default_timezone_set('Asia/Jakarta'); 
session_start();
error_reporting(0);

include "../config/koneksi.php";

$tanggal = date("y-m-d");

$update = mysql_query("UPDATE rekam_medis SET tanggal_mengembalikan='$tanggal', status='Sudah Dikembalikan' WHERE kode_rm='$_GET[kode_rm]'")or die(mysql_error());
if($update){
              echo "<script>
    alert('Data Rekam Medis Berhasil Dikembalikan');
    window.location = '../data_rekam_medis.php?status_pinjam=Sedang+Dipinjam';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Rekam Medis Berhasil Dikembalikan');
    window.location = '../data_rekam_medis.php?status_pinjam=Sedang+Dipinjam';
    </script>
    ";}
?>