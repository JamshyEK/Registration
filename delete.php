<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registrationdb';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if (!isset($_GET['id'])) {
	echo 'No ID was given...';

} else {
	$id = $_GET['id'];
	$del = "DELETE FROM keytbl WHERE sid='$id'";
	$rs = mysqli_query($conn, $del);
	echo "<meta http-equiv='refresh' content='0;url=admin.php'>";

}

?>