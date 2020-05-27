<?php
session_start();
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registrationdb';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$shuser = $_SESSION["userid"];
$shname = $_POST['shopname'];
$shaddress = $_POST['shopaddress'];
$shemail = $_POST['shopemail'];
$shkey = $_POST['shopkey'];
$shday = $_POST['days'];

$reg = "insert into keytbl(sname , saddress , semail , skey, userid , sday) values ('$shname','$shaddress','$shemail','$shkey','$shuser','$shday')";
$result = mysqli_query($conn, $reg);
if ($result == true) {
	echo "registration successful";
} else {
	echo "unsuccessful";
}
mysqli_close($conn);

?>