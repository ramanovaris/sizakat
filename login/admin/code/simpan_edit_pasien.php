<?php 
session_start();
include "../config/koneksi.php";

$no_rm= $_POST['no_rm'];
$nama_pasien= $_POST['nama_pasien'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$update = mysql_query("UPDATE pasien SET nama_pasien='$nama_pasien',jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE no_rm='$no_rm'")or die(mysql_error());

if($update){
              echo "<script>
    alert('Data Pasien Berhasil Diupdate');
    window.location = '../data_pasien.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Pasien Gagal Diupdate');
    window.location = '../edit_perawat.php?no_rm=$no_rm';
    </script>
    ";}
?>