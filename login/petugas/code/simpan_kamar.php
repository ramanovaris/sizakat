<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$no_kamar = $_POST['no_kamar'];
$nama = $_POST['nama'];
$jenis_kamar = $_POST['jenis_kamar'];
$lantai = $_POST['lantai'];
$status = $_POST['status'];
$kapasitas = $_POST['kapasitas'];

$simpan = mysql_query("INSERT INTO kamar VALUES('$no_kamar','$nama','$jenis_kamar','$lantai','$status','$kapasitas')")or die(mysql_error());

if($simpan){
              echo "<script>
    alert('Data Kamar Berhasil Disimpan');
    window.location = '../data_kamar.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Kamar Gagal Disimpan');
    window.location = '../tambah_kamar.php';
    </script>
    ";}
?>