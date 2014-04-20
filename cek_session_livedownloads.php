<?php 
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	//redirect ke halaman register untuk login
	header('location:register.php');
}
?>