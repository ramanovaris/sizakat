<?php 
session_start();
include "../config/koneksi.php";

$kode_akun = $_POST['kode_akun'];
$username = $_POST['username'];
$password = md5($_POST['password']);


if ($password == "d41d8cd98f00b204e9800998ecf8427e") {

    $update_username_aja = mysql_query("UPDATE akun SET username='$username' WHERE kode_akun='$kode_akun'")or die(mysql_error());
    if($update_username_aja){
              echo "<script>
    alert('Data Akun Berhasil Diupdate');
    window.location = '../data_akun.php';
    </script>
    // ";
            }else{
              echo "<script>
    alert('Data Akun Gagal Diupdate');
    window.location = '../edit_akun.php';
    </script>
    ";}
}
else
{
    $update = mysql_query("UPDATE akun SET username='$username', password='$password' WHERE kode_akun='$kode_akun'")or die(mysql_error());
    if($update){
              echo "<script>
    alert('Data Akun Berhasil Diupdate');
    window.location = '../data_akun.php';
    </script>
    ";
            }else{
              echo "<script>
    alert('Data Akun Gagal Diupdate');
    window.location = '../edit_akun.php?kode_akun=$kode_akun';
    </script>
    ";}

}


?>