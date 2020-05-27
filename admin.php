
<?php
session_start();
if (isset($_SESSION['userid'])) {

} else {
	header('location:login.php');
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Bitpro technologies</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>


        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">

                    <a class="navbar-brand" href="#">Admin</a>
                </div>


                    <div class="nav navbar-nav navbar-right">

                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>


                    </div>

            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Shop Details</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Key</th>
                                        <th>Days</th>
                                        <th>Action</th>



                                    </thead>
                                    <tbody>

 <?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registrationdb';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$shuser = $_SESSION["userid"];
$table = "SELECT sid , sname , saddress , semail , skey , sday  FROM keytbl ORDER BY sid desc ";
$result = $conn->query($table);
if ($result->num_rows > 0) {
	// output data of each row
	while ($row = $result->fetch_assoc()) {

		echo '<tr>
                  <td scope="row">' . $row["sname"] . '</td>
                  <td> ' . $row["saddress"] . '</td>
                  <td> ' . $row["semail"] . '</td>
                  <td> ' . $row["skey"] . '</td>
                  <td> ' . $row["sday"] . '</td>
                  <td><a href="approval.php?id=' . $row["sid"] . '">Approve</a></td>
                  <td><a href="delete.php?id=' . $row["sid"] . '">Reject</a></td>
                </tr>';

	}
} else {

}
?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Bitpro technologies
                </p>
            </div>
        </footer>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>
