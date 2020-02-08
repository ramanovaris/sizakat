<?php 
session_start();
include "../config/koneksi.php";

$no_kamar = $_POST['no_kamar'];
$no_rm = $_POST['no_rm'];
$tgl_pesan    =date('Y-m-d',strtotime($_POST['tgl_pesan']));



$cek=mysql_num_rows(mysql_query("SELECT no_rm FROM pesan_kamar WHERE status='Dipesan' AND no_rm='$no_rm'"));
// Kalau username sudah ada yang pakai
if ($cek > 0){
    echo"
  <script type=\"text/javascript\">
     alert(\"Pasien sudah Memesan kamar !!!\")
     window.location = \"../tambah_pesan_kamar.php\"
     ;
     </script>";
}else{

$simpan = mysql_query("INSERT INTO pesan_kamar VALUES('','$no_kamar','$no_rm','$tgl_pesan',NULL,NULL,NULL,'Dipesan','0')")or die(mysql_error());


if($simpan){
              echo "<script>
    alert('Data Pesan Kamar Berhasil Disimpan');
    window.location = '../pesan_kamar.php?status_pesan=Dipesan';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Pesan Kamar Gagal Disimpan');
    window.location = '../tambah_pesan_kamar.php';
    </script>
    ";}

$hitung = mysql_query("SELECT kapasitas FROM kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
$data=mysql_fetch_array($hitung);
$nilai = $data['kapasitas'];
$hasil = $nilai - 1;
$update = mysql_query("UPDATE kamar SET kapasitas = '$hasil' WHERE no_kamar='$no_kamar'")or die(mysql_error());
$cek = mysql_query("SELECT kapasitas FROM kamar WHERE no_kamar='$no_kamar'")or die(mysql_error());
$data2=mysql_fetch_array($cek);
$kapasitas = $data2['kapasitas'];
if ($kapasitas ==0 ) {
    $update_kapasitas = mysql_query("UPDATE kamar SET status ='Penuh' WHERE no_kamar='$no_kamar'") or die(mysql_error());
}
}
?>