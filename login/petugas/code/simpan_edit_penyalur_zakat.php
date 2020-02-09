<?php 
session_start();
include "../config/koneksi.php";

$id = $_POST['id'];

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


$update = mysql_query("UPDATE penyaluran_zakat SET nbkk='$nbkk', nik='$nik',nama='$nama',kecamatan='$kec', no_hp='$nohp',keterangan='$ket',golongan='$gol',jumlah_dana='$jumlah_dana', jenis_program='$jenis_program',kode_akun='$kode_akun' WHERE id='$id'")or die(mysql_error());

if($update){
              echo "<script>
    alert('Data Berhasil Diupdate');
    window.location = '../data_penyalur_zakat.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Gagal Diupdate');
    window.location = '../edit_penyalur_zakat.php';
    </script>
    ";}
?>