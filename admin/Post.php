<style type="text/css">

</style>
<html>
<body>
<h1>Post Artikel</h1>
<form method="post" name="posting_form" action="submit.php" id="form">
Judul Artikel<br>
<input type="text" name="judul_artikel" size="30" required="required"><br>
Isi Artikel<br>
<textarea name="isi_artikel" cols="60" rows="10" required="required"></textarea><br>
<input type="submit" name="submit" value="Kirim">
</form>
<h1>Daftar Artikel</h1>
<table border="1" cellpadding="5" cellspacing="0" style="text-align:center">
	<thead>
    	<tr>
        	<td>No.</td>
        	<td>Judul</td>
        	<td>Tanggal Post</td>
			<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	include('koneksi_database.php');
	$query = mysql_query("select * from artikel");
	$no=1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['judul_artikel']; ?></td>
        	<td><?php echo $data['tgl_artikel']; ?></td>
            <td>
                <a href="delete.php?id_artikel=<?php echo $data['id_artikel']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>

</table>
</body>
</html>