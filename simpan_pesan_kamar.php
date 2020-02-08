<?php 
date_default_timezone_set('Asia/Jakarta');
error_reporting(0);
include "config/koneksi.php";

$no_kamar = $_POST['no_kamar'];
$no_rm = $_POST['no_rm'];
$tgl_pesan    =date('Y-m-d');

$cek=mysql_num_rows(mysql_query("SELECT no_rm FROM pesan_kamar WHERE status='Dipesan' AND no_rm='$no_rm'"));
// Kalau username sudah ada yang pakai
if ($cek > 0){
    echo"
  <script type=\"text/javascript\">
     alert(\"Anda Sudah Melakukan Pemesanan Kamar, Silakan Konfirmasi Ke petugas !!!\")
     window.location = \"index.php\"
     ;
     </script>";
}else{
    $simpan = mysql_query("INSERT INTO pesan_kamar VALUES
        ('','$no_kamar','$no_rm','$tgl_pesan',NULL,NULL,NULL,'Dipesan','1')")
        or die(mysql_error());

if($simpan){
    echo "<script>
    alert('Kamar berhasil dipesan, silakan kofirmasi ke petugas RSIA');
    window.location = 'index.php';
    </script>
    ";
    }else{
    echo "<script>
    alert('Kamar gagal dipesan');
    window.location = 'index.php';
    </script>
    ";
}

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