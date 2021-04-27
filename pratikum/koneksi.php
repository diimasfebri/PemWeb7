<?php
	//konfigurasi database
	$servername ="localhost";
	$username = "root";
	$password = "";
	$database = "latihan";

	//membuka koneksi ke database myDB
	$koneksi = mysqli_connect($servername,$username,$password,$database);

	//cek koneksi jika gagal.
	if (!$koneksi) {
	die("Connection Failed: " . mysqli_connect_error());
	}

?>