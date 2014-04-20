<?php 
include('koneksi_database.php');
?>

<html>
<body>
<h1>Data User</h1>

<table border="1" cellpadding="5" cellspacing="0" style="text-align:center">
	<thead>
    	<tr>
        	<td>No.</td>
        	<td>Username</td>
        	<td>Password</td>
        	<td>Email</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from user");
	$no=1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['username']; ?></td>
        	<td><?php echo $data['password']; ?></td>
        	<td><?php echo $data['email']; ?></td>
            <td>
                <a href="delete.php?id_user=<?php echo $data['user_id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table><br>
</body>
</html>