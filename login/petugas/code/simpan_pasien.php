<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$nik=$_POST['nik'];
$no_rm = $_POST['no_rm'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$tanggal = date("y-m-d");

$simpan_pasien = mysql_query("INSERT INTO pasien VALUES('$no_rm','$nama_pasien','$jenis_kelamin','$alamat')")or die(mysql_error());

$simpan_registrasi = mysql_query("INSERT INTO registrasi VALUES('',$nik,'$no_rm','$tanggal', '$nama_pasien','$jenis_kelamin','$alamat','pasien','0')")or die(mysql_error());

if($simpan_pasien AND $simpan_registrasi){
              echo "<script>
    alert('Data Pasien Berhasil Disimpan');
    window.location = '../data_pasien.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Pasien Gagal Disimpan');
    window.location = '../tambah_pasien.php';
    </script>
    ";}
?>