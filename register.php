<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/register.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php

	$message="";
	include 'core/connect.php';
	if (isset($_POST["btn_submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$fullname = $_POST["fullname"];
		$email = $_POST["email"];
  			// Nếu 1 trường không nhập thì nó sẽ không đc
		if ($username == "" || $password == "" || $fullname == "" ||$email=="") {
			$message ="Please complete all information requested on this form";
		}else{
  					// kiểm tra tk tồn tại chưa hả :D
			$sql="select * from user where email='$email' or username='$username' ";
			$kt=mysqli_query($connect, $sql);

			if(mysqli_num_rows($kt)  > 0){
				$message ="Account already exists";
			}else{
				

				$sql = "INSERT INTO user(
										username,
										password,
										fullname,
										email
									) VALUES (
									    '".$username."',
										'".$password."',
										'".$fullname."',
										'".$email."'
									)";
					   // thực thi lênh connect với connect.php
				mysqli_query($connect,$sql);
				$message ="You have successfully registered. Please click <a href='login.php'>here</a> to login";
			}
		}
	}
	?>
	<!-- start header -->
	<header class="navbar-fixed-top">
		<nav class="navbar navbar-default" role="navigation" style="border-bottom: 2px solid #73a0aa">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" style="float: left;margin-left: 15px">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="img/logo.png" width="170px"></a>
				</div>
				<div class="collapse navbar-collapse" id="collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Book Ticket</a></li>
						<li><a href="timetable.php">Timetable</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li class="active"><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- finish header -->
	<div class="container">
		<div class="row" id="register">
			<div class="col-sm-5 col-sm-offset-3">
				<form role="form" id="registerForm" class="bong" method="post" action="register.php">
					<div class="row">
						<h3 style="color:#23a8da; margin-left:10px">REGISTER FORM</h3>
						<hr>

						<div class="col-sm-12">
							<label for="name" class="h4">Username:</label>
							<input type="text" class="form-control" id="name" name="username" placeholder="Enter name" required>
						</div>
						<div class="col-sm-12">
							<label for="name" class="h4">Password:</label>
							<input type="password" class="form-control" id="name" name="password" placeholder="Enter password" required>
						</div>
						<div class="col-sm-12">
							<label for="name" class="h4">Your First Name:</label>
							<input type="text" class="form-control" id="name" name="fullname" placeholder="Enter name" required>
						</div>
						<div class="col-sm-12">
							<label for="password" class="h4">Email:</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
						</div>
						<div class="col-sm-12">
							<button type="submit" id="form-submit" class="btn btn-info btn-lg pull-right " name="btn_submit" >Register</button>
						</div>
						<div class="col-sm-12" style="color:green">
							<b><?php echo $message;?></b>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
