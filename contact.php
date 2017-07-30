<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
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
						<li class="active"><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- finish header -->
	<div class="container">
		<div class="row" id="contact">
			<div class="col-sm-5 col-sm-offset-3">
				<form role="form" id="contactForm"  class="bong">
					<div class="row">
						<h3 style="color:#23a8da; margin-left:10px">CONTACT FORM</h3>
						<hr>
						<div class="col-sm-12">
							<label for="name" class="h4">Your Name:</label>
							<input type="text" class="form-control" id="name" placeholder="Enter name" required>
						</div>
						<div class="col-sm-12">
							<label for="email" class="h4">Your Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Enter email" required>
						</div>
						<div class="col-sm-12">
							<label for="message" class="h4 ">Your Message:</label>
							<textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
						</div>
						<div class="col-sm-12">
							<button type="submit" id="form-submit" class="btn btn-info btn-lg pull-right ">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
