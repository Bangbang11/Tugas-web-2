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
	<title>Form Pendaftaran Siswa Baru | Tugas Web 2</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="shortcut icon" type="image/x-icon" href="b.jpg">
</head>

<body>
<div class="wrap">
	<div class="header">
		<h2 align="center">TUGAS PEMROGRAMAN WEB 2</h2>
	</div>
	<div class="menu">
		<ul>
			<li style="border-left: 1px solid #e1e1e1"><a href="logout.php">Logout</a></li>
			<li style="border-left: 1px solid #e1e1e1"><a href="list-siswa.php">kembali</a></li>

		</ul>
	</div>
	<div class="badan">
	<div class="sidebar"></div>
	<div class="content">
	<br>
	<br>
	<p align="center"><b>Form Pendaftaran Siswa Baru</b></p>


	<form action="proses-pendaftaran.php" method="POST">

		<center><fieldset style="width:900px">
		<br>

		<p>
			<label for="nama">Nama : </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="nama" placeholder="nama lengkap" style="width:700px; height:25px;" />
		</p>
		<p>
			<label for="alamat">Alamat : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<textarea name="alamat" placeholder="Alamat" style="width:700px;"></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin : &nbsp;&nbsp;&nbsp;</label>&nbsp;
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" > Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" > Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<select name="agama" style="width:700px; height:25px;">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal : </label>&nbsp;&nbsp;&nbsp;
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" style="width:700px; height:25px;"/>
		</p>
		<p>
			<center><input type="submit" value="Daftar" name="daftar" align="center" style=" width:400px; height: 30px; background:#69d2e7; border-radius:5px;" /></center>
		</p>

		</fieldset></center>

	</form>
	</div>
	</div>
	<div class="footer"><p align="center">&copy; Bangbang TIF STT-Bandung 2017</p></div>
	</div>

	</body>
</html>