<?php
include("koneksi_database.php");
// mendapatkan id image
$id = $_GET['id'];

$query = "SELECT image FROM image WHERE id = $id";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);

$proporsi = 0.3; // thumbnail 10% dari ukuran asli

// membuat image dari string database
$img = imagecreatefromstring($data['image']);

// mendapatkan ukuran panjang dan tinggi pixel
$width = imagesx($img);
$height = imagesy($img);

// mengatur panjang dan lebar ukuran thumbnail
// sesuai proporsi
define("T_WIDTH", $width*$proporsi);
define("T_HEIGHT", $height*$proporsi);

// menyiapkan image baru untuk thumbnail
$img_copy = imagecreatetruecolor(T_WIDTH, T_HEIGHT);

// membuat image untuk thumbnail dengan mengubah ukuran
// image asli
imagecopyresized($img_copy, $img, 0, 0, 0, 0, T_WIDTH, T_HEIGHT, $width, $height);

// output thumbnail
header("Content-type: image/jpeg");
imagejpeg($img_copy);

?>