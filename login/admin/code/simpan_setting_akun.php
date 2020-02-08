<?php

include "../config/koneksi.php";

session_start();
$username =$_POST['username'];
$password_lama = md5($_POST['password_lama']);
$password_baru = md5($_POST['password_baru']);
$password_baru2 = md5($_POST['password_baru2']);


$kode_akun=$_SESSION['kode_akun'];

if ($password_lama=="0") {
    $update_username =mysql_query("UPDATE akun SET username='$username' WHERE kode_akun='$kode_akun'")or die(mysql_error());

    echo "<script>
    alert('Data Akun Berhasil Diupdate');
    window.location = '../index.php';
    </script>
    ";  
}
else
{

$update =mysql_query("UPDATE akun SET username='$username' WHERE kode_akun='$kode_akun'");

$cek_pw= mysql_query("SELECT password FROM akun WHERE kode_akun='$kode_akun'");

$data = mysql_fetch_array($cek_pw);
if ($data['password']==$password_lama){
    if ($password_baru==$password_baru2) {
        # code...
        $sql = mysql_query("UPDATE akun SET password ='$password_baru' WHERE kode_akun='$kode_akun'")or die(mysql_error());
        if ($sql) echo "<script>
    alert('Data Akun Berhasil Diupdate');
    window.location = '../logout.php';
    </script>
    ";          
    }
         else 
        echo "<script>
    alert('Password tidak sama');
    window.location = '../setting_akun_admin.php';
    </script>
    ";  
}
else 
{
    echo "<script>
    alert('Password lama salah');
    window.location = '../setting_akun_admin.php';
    </script>
    ";

}
}


?>