<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>METALLICA</title>
</head>
<body id="bodyadmin">
	<form action="validasiloginadmin.php" method="post">
	<table align="center" width="550" height="320">
		<tr>
			<td background="images/welcome.jpg" width="550" height="320"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<table bgcolor="#FFFFFF" align="center">
					<tr>
						<td>
						Username
						</td>
						<td>
						<input type="text" name="usernameadmin" maxlength="40" />
						</td>
					</tr>
					<tr>
						<td>
						Password
						</td>
						<td>
						<input type="password" name="passwordadmin" maxlength="40" />
						</td>
					</tr>
					<tr>
						<td colspan="2">
						<input type="submit" name="login" value="Login"/>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
						<?
						if (!empty($_GET['error'])) {
							if ($_GET['error'] == 1) {
							echo "Invalid Login!";
							}
						}
						?>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">Copy Right by <a href="http://www.facebook.com/IrfanRockability" target="_blank">Irfan</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
	</form>
</body>
</html>
