<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$query_mysql = mysql_query("SELECT * FROM petugas WHERE id_petugas='$_GET[id]'")or die(mysql_error());
$data = mysql_fetch_array($query_mysql);
// var_dump($data['id_akun']);
// die();
$hapus = mysql_query("DELETE FROM petugas WHERE id_petugas='$_GET[id]'")or die(mysql_error());
$hapus = mysql_query("DELETE FROM akun WHERE kode_akun='$data[id_akun]'")or die(mysql_error());

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