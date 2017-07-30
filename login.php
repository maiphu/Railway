<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rainbow Railway</title>
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>

	<?php
	session_start();
	?>
	<?php
	$message="";
	//Gọi file connection.php ở bài trước
	include 'core/connect.php';
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			$message="Don't blank Username or Password";
		}else{
			$sql = "select * from user where username = '$username' and password = '$password' ";
			$query = mysqli_query($connect,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				$message=" Incorrect Username or Password ";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
				header('Location: timetable.php');
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
	<section class="login_section">
		<div class="container">
			
			<!-- login -->
			<div class="login_title">
				<h4>LOGIN</h4>
				<div class="message" style="text-align: center; color:red ;">
					
					<b><?php echo $message;?></b>
					
				</div>
				<center><form class="login" method="POST" action="login.php">
					<input type="text" class="form-control" placeholder="Username" name="username" required autofocus="">
					<i class="fa fa-user"></i>

					<input type="password" class="form-control" placeholder="Password" name="password" >
					<i class="fa fa-key"></i>

				</div>
				<center>
					<div class="checkbox">
						<label>
							<input name="remember" type="checkbox" class="checkbox-info" value="Remember Me"/>&nbsp;Remember me
						</label>
					</div>
					<button class="btn btn-info btn-login" type="submit"name="btn_submit">Login</button><br/>
					<span><a href="register.php" style="font-size:14px; text-decoration:none;">Create an account</a></span>
				</form></center>
			</center>
		</section>

		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>

