<?php
mysql_connect("localhost","root","");
mysql_select_db("rsia2");
$kamar = $_GET['kamar'];
$kota = mysql_query("SELECT no_kamar,nama,biaya FROM kamar WHERE no_kamar='$kamar' order by nama");
while($k = mysql_fetch_array($kota)){
    echo '<input type="text" name="kamar" id="kota" value="'.$k['biaya'].'">';
}
?>
