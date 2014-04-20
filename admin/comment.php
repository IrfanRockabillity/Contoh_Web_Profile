<?php 
include('koneksi_database.php');
?>

<html>
<body>
<h1>Komentar</h1>

<table border="1" cellpadding="5" cellspacing="0" style="text-align:center">
	<thead>
    	<tr>
        	<td>No.</td>
        	<td>Nama</td>
        	<td>Isi Komentar</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from komentar");
	$no=1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['nama_komentar']; ?></td>
        	<td><?php echo $data['isi_komentar']; ?></td>
			<td><a href="delete.php?id_komen=<?php echo $data['id_komentar']; ?>">Hapus</a></td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table><br>
</body>
</html>