<?php 
session_start();
include "../config/koneksi.php";

$kode_registrasi = $_POST['kode_registrasi'];
$no_rm = $_POST['no_rm'];

$ambil = mysql_query("SELECT * FROM registrasi WHERE kode_registrasi='$kode_registrasi'") or die(mysql_error());

$data = mysql_fetch_array($ambil);
$nama_pasien = $data['nama_pasien'];
$jenis_kelamin = $data['jenis_kelamin'];
$alamat = $data['alamat'];

$insert_pasien = mysql_query("INSERT INTO pasien VALUES('$no_rm','$nama_pasien', '$jenis_kelamin', '$alamat')")or die(mysql_error());

$update = mysql_query("UPDATE registrasi SET status ='Pasien', no_rm='$no_rm' WHERE kode_registrasi='$kode_registrasi'")or die(mysql_error());

if($update AND $ambil AND $insert_pasien){
              echo "<script>
    alert('Data Pendaftaran Berhasil Diupdate');
    window.location = '../data_registrasi.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Gagal Diupdate');
    window.location = '../data_registrasi.php';
    </script>
    ";}
?>