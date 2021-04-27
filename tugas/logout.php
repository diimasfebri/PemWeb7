<?php 
//kembali ke homepage
session_start();
session_destroy();
header("http://localhost/PemrogramanWeb/PemWeb7/tugas/index.php");
?>