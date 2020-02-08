<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$kode_rm = $_POST['kode_rm'];
$no_rm =$_POST['no_rm'];
$nik_dokter = $_POST['nik_dokter'];
$nik_perawat = $_POST['nik_perawat'];
$nik_petugas = $_POST['nik_petugas'];
$kode_poli =$_POST['kode_poli'];
$tanggal = date("y-m-d");
$jaminan  = $_POST['jaminan'];
$jenis_perawatan  = $_POST['jenis_perawatan'];

$update = mysql_query("UPDATE rekam_medis SET nik_dokter='$nik_dokter',nik_perawat='$nik_perawat',kode_poli='$kode_poli', jaminan='$jaminan', jenis_perawatan='$jenis_perawatan' WHERE kode_rm='$kode_rm'")or die(mysql_error());

if($update){
              echo "<script>
    alert('Data Rekam Medis Berhasil Diedit');
    window.location = '../data_rekam_medis.php?status_pinjam=Sedang+Dipinjam';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Rekam Medis Gagal Diedit');
    window.location = '../edit_rekam_medis.php?kode_rm=$kode_rm';
    </script>
    ";}
?>