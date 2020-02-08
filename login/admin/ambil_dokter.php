 	<option value="0">--Pilih--</option>
<?php 
    include "config/koneksi.php"; 
  
$kode_poli = $_GET['kode_poli'];
$dokter = mysql_query("SELECT nik_dokter,nama_dokter FROM dokter WHERE kode_poli='$kode_poli'");
 
while($k = mysql_fetch_array($dokter)){
echo "<option value=\"".$k['nik_dokter']."\">".$k['nama_dokter']."</option>\n";
}
?>
