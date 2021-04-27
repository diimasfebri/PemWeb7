<?php 
//kkonfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "latihan";

//script untuk koneksi php ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

//cek koneksi
if (!$koneksi) {
	die("Connection Failed: " . mysqli_connect_error());
}else
echo "koneksi berhasil"
 ?>