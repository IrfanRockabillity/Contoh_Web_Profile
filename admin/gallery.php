<html>
<body>
<h1>POST GALLERY</h1>
<table border="0" cellpadding="5">
	<form enctype="multipart/form-data" action="upload.php" method="post">
	<tr>
		<td>Judul Image
		<td> <input type="text" name="title" required="required"><BR />
	</tr>
	<tr> 
		<td>Pilih File Image <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
		<td><input name="image" type="file" /><br />
	</tr>
	<tr>
		<td><input type="submit" name="submit" value="Upload" />
	</tr>
	</form>
</table>

<h1>Daftar Gambar</h1>
<table border="1" cellpadding="5" cellspacing="0" style="text-align:center">
	<thead>
    	<tr>
        	<td>No.</td>
        	<td>Tittle</td>
			<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	include('koneksi_database.php');
	$query = mysql_query("select * from image");
	$no=1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['title']; ?></td>
            <td>
                <a href="delete.php?id_gambar=<?php echo $data['id']; ?>">Hapus</a>
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
