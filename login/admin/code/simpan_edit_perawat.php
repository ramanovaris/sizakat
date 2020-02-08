<?php 
session_start();
include "../config/koneksi.php";


$nik_perawat= $_POST['nik_perawat'];
$nama_perawat= $_POST['nama_perawat'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

$update = mysql_query("UPDATE perawat SET nik_perawat='$nik_perawat', nama_perawat='$nama_perawat',jenis_kelamin='$jenis_kelamin',jabatan='$jabatan', alamat='$alamat' WHERE nik_perawat='$nik_perawat'")or die(mysql_error());

if($update){
              echo "<script>
    alert('Data Perawat Berhasil Diupdate');
    window.location = '../data_perawat.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Perawat Gagal Diupdate');
    window.location = '../edit_perawat.php';
    </script>
    ";}
?>