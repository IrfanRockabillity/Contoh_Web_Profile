<?php
include("koneksi_database.php");
// membuat temporary name untuk file image
$tmpName   = $_FILES['image']['tmp_name'];
$title = ($_POST['title']);

// membaca data file image temporary
$fp        = fopen($tmpName, 'r');
$dataimage = fread($fp, filesize($tmpName));

// mengganti data image berupa slash menjadi double slash
$dataimage = addslashes($dataimage);

fclose($fp);

$query = "INSERT INTO image(title, image) VALUES ('$title', '$dataimage')";
$hasil = mysql_query($query);
if ($hasil) 
header('location:home.php?gallery');
?>