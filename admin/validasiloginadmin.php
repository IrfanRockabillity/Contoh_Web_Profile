<?php
include("koneksi_database.php");

session_start();

//tangkap data dari form loginadmin
$usernameadmin = $_POST['usernameadmin'];
$passwordadmin = $_POST['passwordadmin'];
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$usernameadmin = mysql_real_escape_string($usernameadmin);
$passwordadmin = mysql_real_escape_string($passwordadmin);
$q = mysql_query("select * from admin where username='$usernameadmin' and password='$passwordadmin';");
if (mysql_num_rows($q) == 1) {
	//kalau username dan password sudah terdaftar di database
	//buat session dengan nama usernameadmin dengan isi nama user yang login
	$_SESSION['usernameadmin'] = $usernameadmin;
	//redirect ke halaman home
	header('location:home.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:index.php?error=1');
}
?>