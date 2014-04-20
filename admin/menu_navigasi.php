<?php 
	switch (isset($_GET["post"])) {
		case "post" : if (!file_exists ("Post.php"))
		die ("File post tidak ada");
		include("Post.php");
		break;
	}
?>

<?php 
	switch (isset($_GET["gallery"])) {
		case "categories" : if (!file_exists ("gallery.php"))
		die ("File gallery tidak ada");
		include("gallery.php");
		break;
	}
?>



<?php 
	switch (isset($_GET["comment"])) {
		case "message" : if (!file_exists ("comment.php"))
		die ("File comment tidak ada");
		include("comment.php");
		break;
	}
?>
<?php 
	switch (isset($_GET["user_member"])) {
		case "user_member" : if (!file_exists ("Usermember.php"))
		die ("File user memeber tidak ada");
		include("Usermember.php");
		break;
	}
?>

