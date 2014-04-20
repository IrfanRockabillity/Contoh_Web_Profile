<?php 
include('koneksi_database.php');
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
$query = mysql_query("insert into komentar values('','$nama','$komentar')") or die(mysql_error());
if ($query) {
		header('location:index.php');
}
?>