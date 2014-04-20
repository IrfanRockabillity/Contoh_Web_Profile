<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>METALLICA</title>
<script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript">
if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"nature beauty","desc":"nature beauty photography"},{"id":"slide-img-2","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"}];
</script>
</head>
<body>
<table border="1" id="table">
	<tr>
		<td colspan="2">
			<form name="index" action="validasi_login.php" method="post">
			<INPUT TYPE = 'TEXT' NAME = 'username' SIZE = '15' MAXLENGTH = '15'>&nbsp;<INPUT TYPE = 'PASSWORD' NAME = 'password'   SIZE = '15'  MAXLENGTH = '15'>&nbsp;<INPUT TYPE = 'SUBMIT' NAME = 'login 'VALUE = 'Login'> <a href="register.php"> Register </a>
			</form>
			<?php
				include "pesanloigineror.php";
			?> 
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<div id="header">
				<div class="wrsap">
					<div id="slide-holder">
					<div id="slide-runner">
						<a href=""><img id="slide-img-1" src="images/slide.jpg" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-2" src="images/slide1.jpg" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-3" src="images/slide2.jpg" class="slide" alt="" /></a>
						<a href=""><img id="slide-img-4" src="images/slide3.jpg" class="slide" alt="" /></a>
							<div id="slide-controls">
								<p id="slide-client" class="text"><strong>post: </strong><span></span></p>
								<p id="slide-desc" class="text"></p>
								<p id="slide-nav"></p>
							</div>
					</div>
					</div>
   				</div>
			</div><!--/header-->

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
		<?php
			include "koneksi_database.php"; 
			$id = $_GET['page_detil'];
			if (isset($_GET['page_detil'])) {
				$query = "select * from artikel where id_artikel=$id";
				$runquery = mysql_query($query);
				$result = mysql_fetch_array($runquery);
				$isi_artikel = $result['isi_artikel'];
				$judul=$result['judul_artikel'];
				echo "<h3>$judul</h3>";
				print $isi_artikel ;
				print "<br><a href=index.php>Back ... </a><br>";
				include "comment.php";
			}
			else {
				print "";
					
			}
?>
		</td>
		<td id="sidebar">
				<h3>Metallica Fans Club</h3>
					<a href="#"><img src="images/metclub.png" width="259" height="194" alt="logo fans club" /></a>
					<div id="social"><!--Begin Social-->
					<a href="http://www.facebook.com" target="_blank"><img src="images/facebook.png" width="33" height="33" alt="Facebook" /></a>
					<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png" width="33" height="33" alt="Twitter"/></a>
					</a><a href="http://www.youtube.com/" target="_blank"><img src="images/youtube.png" width="33" height="33" alt="RSS Feed" /></a>      
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
