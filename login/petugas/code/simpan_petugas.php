<?php 
session_start();
include "../config/koneksi.php";


// $nik_petugas = $_POST['nik_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];

$username = $_POST['username'];
$password = md5($_POST['password']);

$simpan_akun = mysql_query("INSERT INTO akun VALUES('','$username','$password','Petugas')") or die(mysql_error());

$kode_akun = mysql_insert_id();

$simpan_petugas = mysql_query("INSERT INTO petugas VALUES('', '$nama_petugas','$jenis_kelamin','$jabatan','$kode_akun')")or die(mysql_error());

if($simpan_petugas AND $simpan_petugas){
              echo "<script>
    alert('Data Petugas Berhasil Disimpan');
    window.location = '../data_petugas.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Petugas Gagal Disimpan');
    window.location = '../tambah_petugas.php';
    </script>
    ";}
?>