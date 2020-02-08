<?php
error_reporting(0);
ini_set("display_errors",0);



$no_rm2 = $_POST['no_rm'];
$nama2 = $_POST['nama'];


include("config/koneksi.php");

$sql = mysql_query("SELECT * FROM pasien WHERE no_rm='$no_rm2'");
$i=1;
while ($data = mysql_fetch_array($sql)){
$no_rm = $data['no_rm'];
$nama = $data['nama_pasien'];


$i++;
}

if (($no_rm2==$no_rm) & ($nama2 ==$nama)){
    
	echo "<script>
	 
	  window.location = 'pesan_kamar_cepat.php?no_rm=$no_rm2';
	  </script>";

}
else if (($no_rm2!=$no_rm)){
	echo "<script>
	  alert('No RM Anda Salah  !!!');
	  window.location = 'index.php';
	  </script>
	  ";

}
else if (($nama2!=$nama)){
	echo "<script>
	  alert('Nama Anda Salah !!!');
	  window.location = 'index.php';
	  </script>
	  ";

}


else{
echo "<script>
	  alert('Tidak Ada Data yang Cocok, Pastikan Anda Sudah Menjadi Member RSIA !!!');
	  window.location = 'index.php';
	  </script>
	  ";
}
?>