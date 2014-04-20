<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>METALLICA</title>
</head>
<?php include ("ceksession.php"); ?>
<body id="bodyhome">
<a href="../index.php" target="_blank">VIEW SITE</a><br />
	<div id="header">
		<h2>Administrator</h2>	
	</div>  
	<div id="navigasi">
		<ul>
			<li><a href="Home.php">HOME</a>
			<li><a href="Home.php?post">POST</a>
			<li><a href="Home.php?gallery">GALLERY</a>
			<li><a href="Home.php?comment">COMMENT</a>
			<li><a href="Home.php?user_member">USER MEMBER</a>
			<li><a href="Logout.php">LOGOUT</a>
		</ul>
	</div>
	<? include "menu_navigasi.php";
	   include "pesan.php"; 
	?>
	
</body>
</html>
