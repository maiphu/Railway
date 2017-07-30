<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rainbow Railway</title>
  <link rel="icon" href="img/favicon.png" type="image/x-icon"/>
  <link rel="stylesheet" href="bootstrap/css/bootstrap-them.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" href="css/timeline.css">
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
 <section class="login_section">í
  <div class="container-fluid">
    <form id="msform" action="navigation.php" method="POST" accept-charset="utf-8">
      <!-- Progressbar -->
      <ul id="progressbar">
        <li class="active">Search Result</li>
        <li>Personal Details</li>
        <li>Payment</li>
        <li>Generate Ticket</li>
      </ul>
      <!-- fieldset -->
      <fieldset>
        <h1 class="fs-title">SEARCH RESULT</h1><hr>
        <div class="table-responsive">  
          <?php
          include 'search.php';
          ?>
        </div>
        <input type="button" name="next" class="next action-button" value="Book Ticket" />
      </fieldset>
      <fieldset>
      <?php include 'persional_infor.php';?>
      </fieldset>
      <fieldset>
        <h2 class="fs-title">Payment</h2><br/>
        <div class="row">
          <div class="col-md-5"></div>
          <div class="col-md-4" style="text-align:left;">
           <input type="radio" name="optradio" style="width:13px;">&nbsp;Cash<br/>
           <input type="radio" name="optradio" style="width:13px;">&nbsp;Card:&nbsp;&nbsp;<select type="select" name="optradio">
           <option>Master Card</option>
           <option>Visa Card</option>
           <option>Discover Card</option>
         </select>
         <div class="form-group">
          <img src="img/mastercard.gif" alt="" width="50">
          <img src="img/logo_visa.jpg" alt="" width="50">
          <img src="img/discover.jpg" alt="" width="50">
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <?php include 'generate_ticket.php';?>
    </fieldset>
  </form>
</div>
</section>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="http://www.thuthuatweb.net/demo/Multi-step-form/jquery.easing.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/timeline.js"></script>
</body>
</html>