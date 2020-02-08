<?php 
session_start();

include "../config/koneksi.php";

$update_notif = mysql_query("UPDATE pesan_kamar SET notif='0'")or die(mysql_error());
 echo "<script>
    window.location = '../pesan_kamar.php?status_pesan=Dipesan';
    </script>
    ";

?>
