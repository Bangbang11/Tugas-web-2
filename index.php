<!DOCTYPE html>
<html>
<head>
	<title>Form Login Tugas Web 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="b.jpg">
</head>
<body>
<div class="wrap">
	<div class="header">
	<center><h2>TUGAS PEMROGRAMAN WEB 2<br>
	Oleh : Bangbang (12111010)</h2></center>
	</div>
	<div class="menu">
		<ul>
			<li></li>
		</ul>
	</div>
	<div class="badan">
	<div class="sidebar"></div>
	<div class="content">
	<br>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<center><input type="submit" value="Login" class="tombol" style=" width:200px; height: 30px; border-radius:5px;"></center>
			</div>
		</form>
	</div>
	</div>
	</div>
	<div class="footer"><p align="center">&copy; Bangbang TIF STT-Bandung 2017</p></div>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</html>