<?php 
	include "koneksi.php";
	//menyimpan data kedalam variabel
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];
	//menjalankan query pada database untuk memasukkan data
	$query="INSERT INTO biodata_mahasiswa (id,nama,jkel,email,alamat,kota,pesan) VALUES ('$id','$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($koneksi, $query);
	header("location:tampilkontak.php");
?>