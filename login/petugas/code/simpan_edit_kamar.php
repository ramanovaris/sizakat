<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$no_kamar= $_POST['no_kamar'];
$nama= $_POST['nama'];
$jenis_kamar = $_POST['jenis_kamar'];
$lantai = $_POST['lantai'];
$status = $_POST['status'];
$kapasitas = $_POST['kapasitas'];

$edit= mysql_query("UPDATE kamar SET no_kamar='$no_kamar', nama='$nama', jenis_kamar='$jenis_kamar', lantai='$lantai', status='$status', kapasitas='$kapasitas' WHERE no_kamar='$no_kamar'")or die(mysql_error());

if($edit){
              echo "<script>
    alert('Data Kamar Berhasil Diedit');
    window.location = '../data_kamar.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Kamar Gagal Diedit');
    window.location = '../edit_kamar.php?no_kamar=$no_kamar';
    </script>
    ";}
?>