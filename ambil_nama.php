<?php
include "config/koneksi.php";
$no_rm = $_GET['no_rm'];
$query = mysql_query("SELECT * FROM pasien WHERE no_rm='$no_rm'")or die(mysql_error());
$mahasiswa = mysql_fetch_array($query);
$data = array(
            'nama_pasien'      =>  $mahasiswa['nama_pasien'],);
            
 echo json_encode($data);
?>
