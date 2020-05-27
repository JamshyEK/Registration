<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registrationdb';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$user = $_POST['username'];
$pass = $_POST['password'];
$s = "select * from logintbl where user='$user' && pass='$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
$userid = mysqli_fetch_assoc($result);
$id = $userid['userid'];
$isadmin = $userid['isadmin'];
if ($num == 1) {
	$_SESSION["userid"] = $id;
	if ($isadmin == 1) {
		header('location:admin.php');
	} else {
		header('location:home.php');
	}
} else {
	header('location:login.php');
}

?>