<?php 
session_start();
include "../config/koneksi.php";


$nik_dokter= $_POST['nik_dokter'];
$nama_dokter = $_POST['nama_dokter'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kode_poli = $_POST['kode_poli'];

$update = mysql_query("UPDATE dokter SET nik_dokter='$nik_dokter', nama_dokter='$nama_dokter',jenis_kelamin='$jenis_kelamin', kode_poli='$kode_poli',alamat='$alamat' WHERE nik_dokter='$nik_dokter'")or die(mysql_error());

if($update){
              echo "<script>
    alert('Data dokter Berhasil Diupdate');
    window.location = '../data_dokter.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data dokter Gagal Diupdate');
    window.location = '../edit_dokter.php';
    </script>
    ";}
?>