<?php include("config.php");
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | Tugas Web 2</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="shortcut icon" type="image/x-icon" href="b.jpg">
</head>

<body>
<div class="wrap">
	<div class="header">
	<center><h2><b>TUGAS PEMROGRAMAN WEB 2</b><br>
	Oleh : Bangbang (12111010)</h2></center>
	<br>
	</div>
	<div class="menu">
	<ul>
	<li style="border-left: 1px solid #e1e1e1"><a href="logout.php"><b>Logout</b></a></li>
	</ul>
</div>
	<div class="badan">
	<div class="sidebar"></div>
	<div class="content">
	<br>
		<h2 align="center">Tabel Daftar Data Siswa</h2>

	<nav>
		<button><a href="form-daftar.php">&nbsp;<b>[+] Tambah Baru</b>&nbsp;</a></button>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$sql = "SELECT * FROM calon_siswa";
		$query = mysqli_query($db, $sql);

		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";

			echo "<td>";
			echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";

			echo "</tr>";
		}
		?>

	</tbody>
	</table>

	<p align="center">Jumlah Total Siswa : <?php echo mysqli_num_rows($query) ?></p>
	<br/>
<br/>
</div>
</div>
<div class="clear"></div>
<div class="footer"><p align="center">&copy; Bangbang TIF STT-Bandung 2017</p></div>
</div>
	</body>
</html1>