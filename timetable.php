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
 <link rel="stylesheet" href="css/style.css">

 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <link rel="stylesheet" href="css/search.css">
 <script language="javascript" type="text/javascript">
  $(document).ready(function(){
    $("#datepicker").datepicker({
      numberOfMonths: 1,
      onSelect: function(selected) {
        $("#datepicker1").datepicker("option","minDate", selected)
      }
    });
    $("#datepicker1").datepicker({ 
      numberOfMonths: 1,
      onSelect: function(selected) {
       $("#datepicker").datepicker("option","maxDate", selected)
     }
   });  
  });
</script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
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
    <li class="active"><a href="timetable.php">Timetable</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="login.php">Login</a></li>
  </ul>
</div>
</div>
</nav>
</header>
<!-- finish header -->
<div class="container">
 <div class="label-head" style="margin-top:80px;margin-left:15px;">
  <p>
   <a href="#" style="font-size: 25px; color: #23a8da">TIMETABLES</a><br/>
   <a href="#"> <u>Ha Noi</u></a>
   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   <a href="#"><u> Ho Chi Minh city</u></a>
 </p>
</div>
<div class="col-md-12">
  <div class="bs-example" data-example-id="striped-table">
    <?php
    include 'core/connect.php';
               // include 'includes/head.php';
    $sql = "SELECT train_name, depart_from, arrive_at, depart_date, depart_time, arrive_date, fare FROM train LIMIT 50";
    $result = $connect->query($sql);
    if ($result->num_rows > 0) {
     echo "
     <div class='bs-example' data-example-id='striped-table'>
       <table class='table table-striped bang' style='box-shadow: 1px 1px 20px rgba(0, 0, 0, 10);'>
        <thead>
         <tr class='thead'>
          <th>TRAIN NAME</th>
          <th>DEPART FROM</th>
          <th>ARRIVE AT</th>
          <th>DEPART DATE</th>
          <th>DEPART TIME</th>
          <th>ARRIVE DATE</th>
          <th>FARE</th>
        </tr>
      </thead>
      ";
                   // output data of each row
      while($row = $result->fetch_assoc()) {
       echo "<tr>
       <td>".$row["train_name"]."</td>
       <td>".$row["depart_from"]."</td>
       <td>".$row["arrive_at"]."</td>
       <td>".$row["depart_date"]."</td>
       <td>".$row["depart_time"]."</td>
       <td>".$row["arrive_date"]."</td>
       <td>".$row["fare"]."</td></tr>";
     }
     echo "</table></div>";
   } else {
     echo "0 results";
   }
   $connect->close();
   ?>
 </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
</body>
</html>