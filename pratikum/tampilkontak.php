<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--menampillkan tulisan pembuka-->
	<h2>LIST MAHASISWA</h2>
	<!--membuat tabel untuk menampilkan data-->
	<table border="1">
		<tr>
			<td>NO</td>
			<td>NIM</td>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>KOTA</td>
			<td>PESAN</td>
		</tr>
		<?php
			//memanggil file koneksi.php untuk koneksi database
			include "koneksi.php";
			//menjalankan query pada database
			$sql="SELECT * from biodata_mahasiswa";
			$mahasiswa=mysqli_query($koneksi,$sql);
			$no=1;
			//menampilkan data
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jkel']=='P'?'PEREMPUAN':'Laki_Laki';
				echo "<tr>
				<td>$no</td>
				<td>".$row['id']."</td>
				<td>".$row['nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['email']."</td>
				<td>".$row['alamat']."</td>
				<td>".$row['kota']."</td>
				<td>".$row['pesan']."</td>
				</tr>";
				$no++;
			}
		?>
	</table>
</body>
</html>