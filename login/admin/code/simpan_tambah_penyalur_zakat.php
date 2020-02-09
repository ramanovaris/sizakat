<?php 
error_reporting(0);
session_start();
include "../config/koneksi.php";

$nbkk= $_POST['nbkk'];
$nik= $_POST['nik'];
$nama =$_POST['nama'];
$alamat = $_POST['alamat'];
$kec =  $_POST['kecamatan'];
$nohp = $_POST['nohp'];
$ket = $_POST['keterangan'];
$gol = $_POST['golongan'];
$jumlah_dana  = $_POST['jumlah'];
$jenis_program  = $_POST['jenis_program'];
$kode_akun = $_POST['kode_akun'];


$tanggal = date("y-m-d");

$simpan = mysql_query("INSERT INTO penyaluran_zakat VALUES('','$nbkk','$nik
    ','$nama','$alamat','$kec','$nohp','$ket','$gol','$jumlah_dana','$jenis_program','$kode_akun',NULL)")or die(mysql_error());


if($simpan){
              echo "<script>
    alert('Data Pasien Berhasil Disimpan');
    window.location = '../data_penyalur_zakat.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Pasien Gagal Disimpan');
    window.location = '../tambah_penyalur_zakat.php';
    </script>
    ";}
?>