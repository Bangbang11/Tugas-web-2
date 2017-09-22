<?php

include("config.php");
// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:index.php");
}

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data Siswa | Tugas Web 2</title>
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
		<center><p>Form Edit Data Siswa</p></center>

	<form action="proses-edit.php" method="POST">

		<center><fieldset style="width:900px">

			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

		<p>
			<label for="nama">Nama: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="nama" placeholder="nama lengkap" style="width:700px; height:25px;" value="<?php echo $siswa['nama'] ?>" />
		</p>
		<p>
			<label for="alamat">Alamat: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<textarea name="alamat" style="width:700px;"><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: &nbsp;&nbsp;&nbsp;&nbsp;</label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php $agama = $siswa['agama']; ?>
			<select name="agama" style="width:710px; height:25px;">
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
			</select>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label> &nbsp;&nbsp;&nbsp;
			<input type="text" name="sekolah_asal" placeholder="nama sekolah" style="width:708px; height:25px;" value="<?php echo $siswa['sekolah_asal'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" style=" width:400px; height: 30px; background:#69d2e7; border-radius:5px;" />
		</p>

		</fieldset></center>


	</form>
	</div>
	</div>
	<div class="footer"><p align="center">&copy; Bangbang TIF STT-Bandung 2017</p></div>
	</div>

	</body>
</html>