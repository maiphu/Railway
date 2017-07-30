<?php
include 'core/connect.php';
?>
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/search.css">
</head>
<body>
	<script type="text/javascript">//disable 
		function disabledTxt() {
			document.getElementById("choose").disabled = true;
		}
		function enableTxt() {
			document.getElementById("choose").disabled = false;
		}
	</script>
	<script type="text/javascript">
    function fetch_select(val)
    {
     $.ajax({
       type: 'post',
       url: 'fetch_data.php',
       data: {
        get_option:val
      },
      success: function (response) {
        document.getElementById("new_select").innerHTML=response; 
      }
    });
   }

 </script>
	
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
						<li class="active"><a href="#">Book Ticket</a></li>
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
		<form action="navigation.php" method="post">
			<div class="row" id="row1">
				<div class="col-sm-8 col-sm-offset-2">
					<h3 style="color: #2393c6">BOOK TICKET</h3>
					<div class="form-group">
						<label class="radio-inline">
							<input type="radio" name="choose-travel" id="round" value="1" checked  onclick="enableTxt()"> ROUND TRIP
						</label>
						<label class="radio-inline">
							<input type="radio" name="choose-travel" id="one" value="2" onclick="disabledTxt()"> ONE WAY
						</label>
						<div class="clearfix"></div>
					</div>
					<div class="row" id="form1">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<select onchange="fetch_select(this.value);" id="cmbMake" name="make" class="form-control form-control1" required="required">
						      <option>Depart from</option>
						      <?php
						      include 'core/connect.php';

						      $select=mysqli_query($connect,"select depart_from from train group by depart_from");
						      while($row=mysqli_fetch_array($select))
						      {
						       echo "<option>".$row['depart_from']."</option>";
						     }
						     ?>
						   </select>
							<input type="date" class="form-control form-control1" name="depart_date" value="round_trip" id="departuredate">
							<select id="cmbMake" name="adult" class="form-control form-control1">
								<option value=""  disabled="disabled" selected="selected" id="place">Adult</option>
								<option value="1">1</option>
								<option value="2">3</option>
								<option value="3">5</option>
								<option value="4">7</option>
								<option value="5">9</option>
								<option value="6">18</option>
							</select>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<select id="new_select" id="cmbMake" name="make1" class="form-control form-control1">
							    <option>Arrive at</option>
							  </select>
							<input type="date" class="form-control form-control1" name="arrive_date" id="choose" value="one_way" >
							<select id="cmbMake" name="children" name="" class="form-control form-control1">
								<option value="" disabled="disabled" selected="selected" id="place1">Children</option>
								<option value="1">1</option>
								<option value="2">3</option>
								<option value="3">5</option>
								<option value="4">7</option>
								<option value="5">9</option>
								<option value="6">18</option>
							</select>

						</div>
					</div>
					<input type="hidden" name="search" value="1"/>
					<button type="submit" id="find" class="btn btn-info" style="margin-top: 15px; border-radius: 0px;">SEARCH TICKET</button></a>
				</div>
			</div>
		</form>
		<script>
		$("#choose").change(function() { //truy vấn thời gian 
			var startDate = document.getElementById("departuredate").value;
			var endDate = document.getElementById("choose").value;

			if ((Date.parse(endDate) < Date.parse(startDate))) {
				alert("Return date should be greater than Depart date");
				document.getElementById("choose").value = "";
			}
		});
	</script>
	</div>
</body>
</html>