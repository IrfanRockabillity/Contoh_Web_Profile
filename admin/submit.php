<?php
include "koneksi_database.php";
$judul = ($_POST['judul_artikel']);
$isi = ($_POST['isi_artikel']);
$tgl = date('Y-m-d');
$query = mysql_query("INSERT INTO artikel VALUES ('','$judul','$isi','$tgl')");
if ($query) {
		header('location:home.php?post');
}
?>
