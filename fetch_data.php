<?php
if(isset($_POST['get_option']))
{
	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect,'projectrailway');

	$depart_from = $_POST['get_option'];
	$find=mysqli_query($connect,"select arrive_at from train where depart_from='$depart_from'");
	while($row=mysqli_fetch_array($find))
	{
		echo "<option>".$row['arrive_at']."</option>";
	}
	exit;
}
?>