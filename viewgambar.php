<?
include("koneksi_database.php");
$id = $_GET['id'];

$query = "SELECT image FROM image WHERE id = $id";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

header('Content-type: image/jpeg');
echo $data['image'];

?>