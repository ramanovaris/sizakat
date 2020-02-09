<?php 
session_start();
include "../config/koneksi.php";

$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];

$update = mysql_query("UPDATE petugas SET nama='$nama_petugas',jenis_kelamin='$jenis_kelamin',jabatan='$jabatan' WHERE id_petugas='$id_petugas'")or die(mysql_error());

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