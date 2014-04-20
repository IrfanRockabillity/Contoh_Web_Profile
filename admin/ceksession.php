<?php
session_start();
if (!isset($_SESSION['usernameadmin']) || empty($_SESSION['usernameadmin'])) {
	header('location:index.php');
}
?>