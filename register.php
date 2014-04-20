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
		<td colspan="2" id="header1">
		</td>
	</tr>
	<tr>
		<td colspan="2" id="menu">
		<ul> 
				<li><a href="index.php">HOME</a></li>
		</ul>
		</td>
	</tr>
	<tr>
		<td id="content">
			<FORM action="validasi_register.php" method="post">
				<table border="0" cellpadding="5" cellspacing="0" align="center">
				<tr>
					<th colspan="2" align="center">REGISTER NOW</th>
				</tr>
				<tr>
					<td>Username
					<td>:
					<td><input type="text" name="username" maxlength="20" required="required" />
				</tr>
				<tr>
					<td>Password
					<td>:
					<td><input type="password" name="password" maxlength="20" required="required" />
				</tr>
				<tr>
					<td>Email
					<td>:
					<td><input type="text" name="email" maxlength="20" required="required" />
				</tr>
				<tr>
 					<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        		</tr>
				</table>
			</FORM>
			<?php
				include "pesanregister.php";
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
