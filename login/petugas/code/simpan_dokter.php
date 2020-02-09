<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";


$nik_dokter = $_POST['nik_dokter'];
$kode_poli = $_POST['kode_poli'];
$nama_dokter = $_POST['nama_dokter'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];


$simpan_dokter = mysql_query("INSERT INTO dokter VALUES('$nik_dokter','$kode_poli','$nama_dokter','$jenis_kelamin','$alamat')")or die(mysql_error());

if($simpan_dokter){
              echo "<script>
    alert('Data Dokter Berhasil Disimpan');
    window.location = '../data_dokter.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Dokter Gagal Disimpan');
    window.location = '../tambah_dokter.php';
    </script>
    ";}
?>