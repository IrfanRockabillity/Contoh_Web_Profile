<?php 
include('koneksi_database.php');
$id_user = $_GET['id_user'];
$id_artikel = $_GET['id_artikel'];
$id_komen = $_GET['id_komen'];
$id_gambar = $_GET['id_gambar'];
$deletegambar = mysql_query("delete from user where user_id='$id_user'") or die(mysql_error());
$deleteartikel = mysql_query("delete from artikel where id_artikel='$id_artikel'") or die(mysql_error());
$deletekomen = mysql_query("delete from komentar where id_komentar='$id_komen'") or die(mysql_error());
$deletegambar = mysql_query("delete from image where id='$id_gambar'") or die(mysql_error());
if ($deleteuser) {
	header('location:Home.php?pesan=userdeleted');
}
if ($deletekomen) {
		header('location:Home.php?pesan=commentdeleted');
}

if ($deleteartikel) {
	header('location:Home.php?pesan=articledeleted');
}
if ($deletegambar) {
	header('location:Home.php?pesan=gambardeleted');
}
?>