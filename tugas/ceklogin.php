<?php
	//memanggil file koneksi antar database
	include "koneksi.php";
	$username=$_POST['username'];
	$password=$_POST['password'];

	//mengambil data dari database
	$sql="SELECT username,password from user where username='$username' and password='$password'";
	$user=mysqli_query($conn,$sql);

	//cek apakah ada sebelumnya sudah terdaftar atau belum
	if (mysqli_num_rows($user)>0) {
		//inisialisasi session
		session_start();
		$_SESSION['username'] = $username;
		header("location:tampilkontak.php");
	}else
	echo "<script>alert('Username atau Password Salah!');history.go(-1);</script>";
	?>	