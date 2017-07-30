<?php
include 'core/connect.php';
?>

  <h2 class="fs-title">PERSONAL DETAILS</h2><hr/>
  <div class="row">
    <div class="col-sm-6"> 
      <p style="text-align:left; font-size:17px">Title</p>
      <input type="text" name="title" placeholder="Mrs/Mr" class="form-control" />
      <p style="text-align:left; font-size:17px">First name</p><input type="text" name="first_name" placeholder="First name"  class="form-control" />
      <p style="text-align:left; font-size:17px">Last name</p><input type="text" name="last_name" placeholder="Last name" class="form-control"  />
      <p style="text-align:left; font-size:17px">ID No</p><input type="text" name="passport" placeholder="ID no" class="form-control"  />
    </div>
    <div class="col-sm-6" style="text-align:left;"> 
      <p style="text-align:left; font-size:17px">Address</p><input type="text" name="address" placeholder="Address" class="form-control"  />
      <p style="text-align:left; font-size:17px">Email</p><input type="email" name="email" placeholder="Email" class="form-control"  />
      <p style="text-align:left; font-size:17px">Phone</p><input type="text" name="phone" placeholder="Phone" class="form-control"  />
      <span class="label-text form-check-inline" style="font-size:17.5px">
        <input class="form-check-input" type="checkbox" value="" style="width:20px;"><b>
        I have read and agree to <a style="float: none !important;" href="#" target="_blank">Conditions Of Website</a></b>
        <span class="icon-check"></span><span class="icon-check"></span></span>
      </div>
    </div>
    <input type="submit" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //insert persional infor
	$title = $_POST['title'];
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$ID = $_POST['passport'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$insertdata = "INSERT INTO passenger (title, first_name, last_name, passport, address, email, phone) VALUES ('".$title."','".$firstName."','".$lastName."','".$ID."','".$address."','".$email."','".$phone."');";
  //echo $insertdata; 
  $result_add_user = mysqli_query($connect, $insertdata);
  if($result_add_user){
    echo "Them thanh cong";
  }
  else{
    echo "That bai";
  }
}

?>