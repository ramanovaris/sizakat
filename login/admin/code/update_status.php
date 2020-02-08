<?php 
session_start();

include "../config/koneksi.php";

$update_notif = mysql_query("UPDATE registrasi SET notif='0'")or die(mysql_error());
 echo "<script>
    window.location = '../data_registrasi.php';
    </script>
    ";

?>
