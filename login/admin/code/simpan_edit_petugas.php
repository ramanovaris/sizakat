<?php 
session_start();
include "../config/koneksi.php";


$nik_petugas = $_POST['nik_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];

$update = mysql_query("UPDATE petugas SET nik_petugas='$nik_petugas', nama_petugas='$nama_petugas',jenis_kelamin='$jenis_kelamin',jabatan='$jabatan' WHERE nik_petugas='$nik_petugas'")or die(mysql_error());

if($update){
              echo "<script>
    alert('Data Petugas Berhasil Diupdate');
    window.location = '../data_petugas.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Petugas Gagal Diupdate');
    window.location = '../edit_petugas.php';
    </script>
    ";}
?>