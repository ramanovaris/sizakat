
<?php
error_reporting(0);
include "config/koneksi.php";
function anti_injection($data){
  
  $filter=mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
  }

  $user = anti_injection($_POST['username']);
  $pass = anti_injection(md5($_POST['passlogin']));

  if (!ctype_alnum($user) OR !ctype_alnum($pass)){
  echo "<div id='gagal' class='alert alert-danger'>Maaf anda bukan Administrator</div>";

  }

// pastikan username dan password adalah berupa huruf atau angka.

$login=sprintf("SELECT * FROM akun LEFT JOIN petugas ON akun.kode_akun=petugas.id_petugas WHERE username='$user' AND password='$pass'", mysql_real_escape_string($user), mysql_real_escape_string($pass));
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);
// var_dump($r);
// die();

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['kode_akun']     = $r['kode_akun'];
  $_SESSION['username']     = $r['username'];
  $_SESSION['level']     = $r['level'];
  $_SESSION['passlogin']    = $r['passlogin'];
  $_SESSION['nama'] = $r['nama'];

  if($_SESSION['level']=="Admin"){
	echo "<div id='sukses' class='alert alert-info'>
    <strong>BERHASIL...</strong>
    <button type='button' class='close' data-dismiss='alert'>
    <i class='ace-icon fa fa-times'></i>
    </button></div><script>window.location ='admin/index.php'</script>";

  }if($_SESSION['level']=="Petugas"){
      echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='petugas/index.php'</script>";
  }
 
}
else{

  echo "<div id='gagal' class='alert alert-danger'>Mohon maaf username atau password anda salah<button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div>";
}

?>
