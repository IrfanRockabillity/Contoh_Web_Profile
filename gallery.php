<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>METALLICA</title>
</head>

<body>
<table border="1" id="table">
	<tr>
		<td colspan="2">
		<?php
				error_reporting(E_ALL & ~E_NOTICE);
					session_start(); 
					$username = ($_SESSION['username']);
					if (empty($username)) {
						include "form_login.php";
						include "pesanloigineror.php";
					} else 
						echo "Welcome, $username<a href='Logout.php'><input type='button' value='Logout'/></a>";
		?>
		</td>
	</tr>
	<tr>
		<td colspan="2" id="header1">
		</td>
	</tr>
	<tr>
		<td colspan="2" id="menu">
		<ul> 
				<li><a href="home.php">HOME </a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li><a href="gallery.php">GALLERY</a></li>
				<li><a href="live_downloads.php">LIVE DOWNLOADS</a></li>
		</ul>
		</td>
	</tr>
	<tr>
		<td id="content">
		<h3>Gallery</h3>
			<?php
				
				include "koneksi_database.php";
				
				$query = "SELECT id, title FROM image order by id desc";
				$hasil = mysql_query($query);
				if ($hasil) {
				while ($data = mysql_fetch_array($hasil)) {
					echo $data['title']."<br>"."<img src='thumbnail.php?id=".$data['id']."'><br>";
					echo "<a href='viewgambar.php?id=".$data['id']."'>Full View</a><hr>";
				}
				}
			?>
		</td>
		<td id="sidebar">
				<h3>Metallica Fans Club</h3>
					<a href="#"><img src="images/metclub.png" width="259" height="194" alt="logo fans club" /></a>
					<div id="social"><!--Begin Social-->
					<a href="http://www.facebook.com/Metallica" target="_blank"><img src="images/facebook.png" width="33" height="33" alt="Facebook" /></a>
					<a href="https://twitter.com/metallica" target="_blank"><img src="images/twitter.png" width="33" height="33" alt="Twitter"/></a>
					</a><a href="http://www.youtube.com/user/MetallicaTV/" target="_blank"><img src="images/youtube.png" width="33" height="33" alt="RSS Feed" /></a>      
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">Footer
		</td>
	</tr>	
</table>
</body>
</html>
