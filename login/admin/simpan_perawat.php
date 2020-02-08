<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";


$nik_perawat = $_POST['nik_perawat'];
$nama_perawat = $_POST['nama_perawat'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];


$simpan_perawat = mysql_query("INSERT INTO perawat VALUES('$nik_perawat','$nama_perawat','$jenis_kelamin','$alamat','$jabatan')")or die(mysql_error());

if($simpan_perawat){
              echo "<script>
    alert('Data Perawat Berhasil Disimpan');
    window.location = '../data_perawat.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Perawat Gagal Disimpan');
    window.location = '../tambah_perawat.php';
    </script>
    ";}
?>