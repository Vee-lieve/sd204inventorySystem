<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/login.css">
	<title>Login</title>
</head>
<body>



<br><br><br>
<h1>Inventory Management System</h1>
<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
		</div>

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="" method="post">
                <?php include('errors.php'); ?>
					<input type="text" class="input" id="fname" name="first_name" autocomplete="off" placeholder="First name">
					<input type="text" class="input" id="lname" name="last_name" autocomplete="off" placeholder="Last name">
					<input type="email" class="input" id="user_email" name="email" autocomplete="off" placeholder="Email">
					<input type="text" class="input" id="user_name" name="username" autocomplete="off" placeholder="Username">
					<input type="password" class="input" id="user_pass" name="pass1" autocomplete="off" placeholder="Password">
					<input type="password" class="input" id="user_pass" name="pass2" autocomplete="off" placeholder="Confirm password">
					<input type="submit" class="button" name="register" value="Sign Up">
				</form>
			</div>

			<div id="login-tab-content">
				<form class="login-form" action="" method="post">
                <?php include('errors.php'); ?>
					<input type="text" class="input" id="user_login" name="username" autocomplete="off" placeholder="Username">
					<input type="password" class="input" id="user_pass" name="password" autocomplete="off" placeholder="Password">
					<input type="checkbox" class="checkbox" id="remember_me">
					<input type="submit" name="login" class="button" value="Login">
				</form>
			</div>
		</div>
	</div>
	
	<script src="../src/js/login.js"></script>
</body>
</html>