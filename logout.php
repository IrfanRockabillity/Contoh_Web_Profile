<?php
session_start();
//hapus session yang sudah dibuat
session_destroy();
//redirect ke halaman index
header('location:index.php');
?>