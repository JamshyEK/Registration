<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registrationdb';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "select * from logintbl where user='$user'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
	echo "username already taken";
} else {
	$reg = "insert into logintbl(user , pass , email) values ('$user','$pass','$email')";
	mysqli_query($conn, $reg);
	echo "registration successful";
	header('location:login.php');
}

mysqli_close($conn);

?>