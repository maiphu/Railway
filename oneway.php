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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/search.css">
	<!-- Load jQuery UI CSS  -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    <!-- Load jQuery JS -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="js/script.js"></script>
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
						<li class="active"><a href="index.php">Book Ticket</a></li>
						<li><a href="timetable.php">Timetable</a></li>
						<li><a href="contact.php">Contact Us</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- finish header -->
	<div class="container">
		<div class="row" id="row1">
			
			<div class="col-sm-8 col-sm-offset-2">
				<form method="post" action="navigation.php">
				<h3 style="color: #2393c6">BOOK TICKET</h3>
				<button type="button" name="round_trip" class="btn btn-default" style="border-radius: 80px;"><a style="color:#2393c6" href="index.php">ROUND TRIP</a></button>
				<button type="button" name="one_way" class="btn btn-info" style="border-radius: 80px;"><a href="oneway.php" style="color:white">ONE WAY</a></button>

				<div class="row" id="form1">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<select name="from" id="input" class="form-control form-control1" required="required">
							<option value="">From</option>
							<option value="">Hà Nội</option>
							<option value="">Đà Nẵng</option>
							<option value="">Quảng Trị</option>
							<option value="">Quảng Nam</option>
							<option value="">Tp.Hồ Chí Minh</option>
							<option value="">Hà Giang</option>
						</select>
						<input type="text" class="form-control form-control1" name="depart_date" id="datepicker" placeholder="Depart date" required="required">
						<select name="adult" id="input" class="form-control form-control1" >
							<option value="">Adult</option>
							<option value="">1</option>
							<option value="">3</option>
							<option value="">5</option>
							<option value="">7</option>
							<option value="">9</option>
							<option value="">18</option>
						</select>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<select name="to" id="input" class="form-control form-control1" required="required">
							<option value="">To</option>
							<option value="">Hà Nội</option>
							<option value="">Đà Nẵng</option>
							<option value="">Quảng Trị</option>
							<option value="">Quảng Nam</option>
							<option value="">Tp.Hồ Chí Minh</option>
							<option value="">Hà Giang</option>
						</select>
						<input type="text" class="form-control form-control1" name="arrive_date" id="datepicker1" placeholder="Arrive date" disabled>
						<select name="children" id="input" class="form-control form-control1">
							<option value="">Children</option>
							<option value="">1</option>
							<option value="">3</option>
							<option value="">5</option>
							<option value="">7</option>
							<option value="">9</option>
							<option value="">18</option>
						</select>

					</div>
				</div>
				<a href="navigation.php"><button type="submit" name="search_ticket" class="btn btn-info" style="margin-top: 15px; border-radius: 0px;">SEARCH TICKET</button></a>
				</form>
			</div>
			
		</div>
	</div>
</body>
</html>