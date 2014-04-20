<?php
include("koneksi_database.php");
//tangkap data dari form register
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
//untuk mencegah sql injection
//kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$email = mysql_real_escape_string($email);
	
if (empty($username) && empty($password)) {

}
else {
	$perintahSelect = "select username from user";
	$hasil = mysql_query($perintahSelect);
	$terjadidupliksi = "false";
	
	while ($data = mysql_fetch_array($hasil)) {	
		if ($data['username'] == $username) {
		$terjadidupliksi = "true";
		}
	}
	if ($terjadidupliksi=="true") {
		header('location:register.php?message=error');
	}
	else {
		$perintahInsert = "insert into user(username,password,email) values('$username','$password','$email')";
		mysql_query($perintahInsert);
		if ($perintahInsert==true){
			header('location:register.php?message=success'); 
		}
	}
}
?>