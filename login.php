<?php 
include("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($db,"SELECT * FROM user WHERE username='".$username."' AND password='".$password."'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:list-siswa.php");
}else{
	header("location:index.php");	
}

?>