<!DOCTYPE html>
<html>
<head>
	<title>Bitpro</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel = "stylesheet" type = "text/css" href = "login.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<script type="text/javascript" src="myscript.js"></script>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">

			<div class="sign-in-htm">
				<form action="validation.php" method="post">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="username" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
				</form>
			</div>


			<div class="sign-up-htm">
				<form action="registration.php" method="post">
				<div id="myalert" class="alert alert-danger collapse">
					<a href="#" class="close" data-dismiss="alert" onclick="close()">&times;</a>
					<strong>Error!</strong>your password is incorrect
				</div>

				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" name="username" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass1" type="password" class="input" data-type="password" pattern="(?=.*[A-Za-z1-9]).{8,}" title="At least 8 or more characters" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Confirm Password</label>
					<input id="pass2" type="password" name="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="email" name="email" class="input" >
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up" onclick="check()">
				</div>

				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
				</form>
			</div>

		</div>
	</div>
</div>
</body>
</html>
