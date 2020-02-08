<?php
session_start();
 
if(!isset($_SESSION['1'])){
	echo '<script language="javascript">alert("Anda Tidak Diperbolehkan Ke Folder ini"); document.location="../index.php";</script>';
}else{
	if(!isset($_SESSION['2'])){
	echo '<script language="javascript">alert("Anda Tidak Diperbolehkan Ke Halaman Ini"); document.location="../index.php";</script>';
}
}
?>