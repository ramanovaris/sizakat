<?php
header('Content-Type: application/json');
session_start();
error_reporting(0);
include "../config/timeout.php";
//include "config/koneksi.php";
include "../config/koneksi.php";

$sqlQuery = "SELECT * FROM poli JOIN rekam_medis ON poli.kode_poli=rekam_medis.kode_poli ORDER BY poli.kode_poli";
$result = mysql_query($sqlQuery);
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}
echo json_encode($data);
?>