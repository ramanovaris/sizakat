<?php 
session_start();
include "../config/koneksi.php";

$kode_pesan = $_POST['kode_pesan'];
$no_kamar = $_POST['no_kamar'];
$no_rm = $_POST['no_rm'];
$tgl_pesan    =date('Y-m-d',strtotime($_POST['tgl_pesan']));
$tgl_keluar   =date('Y-m-d',strtotime($_POST['tgl_keluar']));
$status = $_POST['status'];
$total_hari = $_POST['total_hari'];
$total_biaya = $_POST['total_biaya'];


$hitung4 = mysql_query("SELECT * FROM pesan_kamar WHERE kode_pesan='$kode_pesan'")or die(mysql_error());
$data=mysql_fetch_array($hitung4);
$no_kamar_lama = $data['no_kamar'];

if ($tgl_keluar == "1970-01-01") {
$update = mysql_query("UPDATE pesan_kamar SET no_kamar='$no_kamar', no_rm='$no_rm', tgl_pesan='$tgl_pesan', tgl_keluar=NULL, status='$status' WHERE kode_pesan='$kode_pesan'") or die(mysql_error());
}
else{
   $update = mysql_query("UPDATE pesan_kamar SET no_kamar='$no_kamar', no_rm='$no_rm', tgl_pesan='$tgl_pesan', tgl_keluar='$tgl_keluar', status='Sudah Keluar', total_hari='$total_hari', total_biaya='$total_biaya' WHERE kode_pesan='$kode_pesan'") or die(mysql_error()); 
}


if ($no_kamar_lama != $no_kamar) {
  
$hitung2 = mysql_query("SELECT * FROM kamar WHERE no_kamar='$no_kamar_lama'")or die(mysql_error());
$data=mysql_fetch_array($hitung2);
$nilai = $data['kapasitas'];
$hasil = $nilai + 1;

$update2 = mysql_query("UPDATE kamar SET kapasitas = '$hasil' WHERE no_kamar='$no_kamar_lama'")or die(mysql_error());


$hitung_kurang = mysql_query("SELECT * FROM kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
$data2=mysql_fetch_array($hitung_kurang);
$nilai2 = $data2['kapasitas'];
$hasil2 = $nilai2 - 1;
$update_kurang2 = mysql_query("UPDATE kamar SET kapasitas = '$hasil2' WHERE no_kamar='$no_kamar'")or die(mysql_error());
if ($kapasitas < 0 ) {
    $update_kapasitas = mysql_query("UPDATE kamar SET status ='Penuh' WHERE no_kamar='$no_kamar'") or die(mysql_error());
}

} elseif ($status=="Dibatalkan"){
$hitung2 = mysql_query("SELECT * FROM kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
$data=mysql_fetch_array($hitung2);
$nilai = $data['kapasitas'];
$hasil = $nilai + 1;
$update2 = mysql_query("UPDATE kamar SET kapasitas = '$hasil' WHERE no_kamar='$no_kamar'")or die(mysql_error());

$cek = mysql_query("SELECT kapasitas FROM kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
$data2=mysql_fetch_array($cek);
$kapasitas = $data2['kapasitas'];
if ($kapasitas !=0 ) {
    $update_kapasitas = mysql_query("UPDATE kamar SET status ='Tersedia' WHERE no_kamar='$no_kamar'") or die(mysql_error());
}
} elseif ($tgl_keluar !="1970-01-01"){
$hitung = mysql_query("SELECT * FROM kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
$data=mysql_fetch_array($hitung);
$nilai = $data['kapasitas'];
$hasil = $nilai + 1;
$update = mysql_query("UPDATE kamar SET kapasitas = '$hasil' WHERE no_kamar='$no_kamar'")or die(mysql_error());
$cek = mysql_query("SELECT kapasitas FROM kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
$data2=mysql_fetch_array($cek);
$kapasitas = $data2['kapasitas'];
if ($kapasitas !=0 ) {
    $update_kapasitas = mysql_query("UPDATE kamar SET status ='Tersedia' WHERE no_kamar='$no_kamar'") or die(mysql_error());
}
}


if($update){
              echo "<script>
    alert('Data Pesan Kamar Berhasil Diupdate');
    window.location = '../pesan_kamar.php?status_pesan=Dipesan';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Pesan Kamar Gagal Diupdate');
    window.location = '../tambah_pesan_kamar.php?kode_pesan=$kode_pesan';
    </script>
    ";}





?>