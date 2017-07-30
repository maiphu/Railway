     <?php
     session_start();
     error_reporting(0);
     include 'core/connect.php';
     if (isset($_POST['search'])) {
     	$depart_from = isset($_POST['depart_from']) ? $_POST['depart_from'] : "";
     	$arrive_at = isset($_POST['arrive_at']) ? $_POST['arrive_at'] : "";
     	$depart_date = isset($_POST['depart_date']) ? $_POST['depart_date'] : "";
     	$arrive_date = isset($_POST['arrive_date']) ? $_POST['arrive_date'] : "";
     	$maker = $_POST['make'];
     	$maker1 = $_POST['make1'];
     	$DP_date = $_POST['depart_date'];
     	$AR_date = $_POST['arrive_date'];
     	$adult =$_POST['adult'];
     	$children = $_POST['children'];
     	$sumPeople = $adult + $children;
     	$_SESSION['sessionVar'] = $sumPeople;
     }
     if (isset($_POST['search']) ){
     	switch($_POST['choose-travel']) {
     		case "1":
     		$value = "round_trip";
     		break;
     		case "2": 
     		$value = "one_way";
     		break;
     	}
     }
     ?>
     <?php
     if(isset($_POST['search'])) {
     	if ($value == "one_way") {
     		$DP_date = date('y-m-d', strtotime($DP_date));
     		$query = mysqli_query($connect,"SELECT * FROM train WHERE depart_from ='$maker' AND arrive_at = '$maker1' AND date(depart_date) = '$DP_date'");
     		$count_member = mysqli_num_rows($query);
     		if ($count_member == 0) {
     			echo "do not have data to search";
     		}else{
     			while ($row = mysqli_fetch_array($query)) {
     				$from = $row['depart_from'];
     				$to = $row['arrive_at'];
     				$trains = $row['train_id'];
     				$train_name = $row_ve['train_name'];
     				$d_date = $row['depart_date'];
     				$depart_time = $row['depart_time'];
     				$arrive_time = $row['arrive_time'];
     				$fare = number_format($row['fare'], 0, ',', '.')." $";

     				$output[] = "<div class='table-responsive'>  
        <div class='col-md-6'>        
          <table class='table'  style='border:1px solid #ddd;'>
            <thead>
              <tr class='active'>
                <th>Depart from: " .$from.' To '.$to.' '."</th>
              </tr>
            </thead>
            <tbody style='text-align:left;'>
              <tr>
                <td>Train name:".$train_name.' '."
                </tr>
                <tr>
                  <td>Depart date:".$depart_date.' '."
                  </tr>
                  <tr>
                    <td>Depart time:".$depart_time.' '."
                    </tr>
                    <tr>
                      <td>Fare:".$fare."</table>
                      </div>
                    </div>";

                  }
                }
              }
     	else if($value == "round_trip") {
    $DP_date = date('Y-m-d', strtotime($DP_date)); //format date
    $AR_date = date('y-m-d', strtotime($AR_date));
    $sql1 = "SELECT * FROM train WHERE depart_from ='$maker' AND arrive_at ='$maker1' AND date(depart_date) ='$DP_date'";
    $sql2 = "SELECT * FROM train WHERE depart_from ='$maker1' AND arrive_at ='$maker' AND date(arrive_date) ='$AR_date'";
    $query_di = mysqli_query($connect, $sql1);
    $query_ve = mysqli_query($connect, $sql2);
    //var_dump($query);
    $count_member_di = mysqli_num_rows($query_di);
    $count_member_ve = mysqli_num_rows($query_ve);

    if($count_member_di == 0 || $count_member_ve == 0) {
    	$output[] = 'There was no trains while coming!';
    }else{
    	while($row_di = mysqli_fetch_array($query_di)) {
    		$from = $row_di['depart_from'];
    		$to = $row_di['arrive_at'];
    		$trains = $row_di['train_id'];
    		$train_name = $row_di['train_name'];
    		$d_date = $row_di['depart_date'];
    		$time = $row_di['depart_time'];
    		$a_date = $row_di['arrive_date'];
    		$fare = number_format($row_di['fare'], 0, ',', '.')." $";
    		$arrive_time = $row_di['arrive_time'];
    		$output1[] = "<div class='table-responsive'>  
        <div class='col-md-6'>        
          <table class='table'  style='border:1px solid #ddd;'>
            <thead>
              <tr class='active'>
                <th>Depart from: " .$from.' To '.$to.' '."</th>
              </tr>
            </thead>
            <tbody style='text-align:left;'>
              <tr>
                <td>Train name:".$train_name.' '."
              </tr>
              <tr>
              <tr>
                <td>Depart date:".$d_date.' '."</tr>
              <tr>
                <td>Arrive date:".$a_date.' '."</tr>
              <tr>
                <td>Depart time:".$time.' '."</tr>
              <tr>
                <td>Arrive time:".$arrive_time.' '."</tr>
              <tr>
                <td>Fare:".$fare."</table></div>";
            }

    	while($row_ve = mysqli_fetch_array($query_ve)) {
    		$from = $row_ve['depart_from'];
    		$to = $row_ve['arrive_at'];
    		$trains = $row_ve['train_id'];
    		$train_name = $row_ve['train_name'];
    		$d_date = $row_ve['depart_date'];
    		$time = $row_ve['depart_time'];
    		$a_date = $row_ve['arrive_date'];
    		$fare = number_format($row_ve['fare'], 0, ',', '.')." $";
    		$arrive_time = $row_ve['arrive_time'];
    		$output2[] = "<div class='table-responsive'>   
              <table class='table'  style='border:1px solid #ddd;'>
                <thead>
                  <tr class='active'>
                  <th>Depart from: " .$from.' To '.$to.' '."</th>
                  </tr>
                  </thead>
                    <tbody style='text-align:left;'>
                       <tr>
                    <td>Train name:".$train_name.' '."
                    </tr>
                      <tr>
                      <tr>
                        <td>Depart date:".$d_date.' '."</tr>
                        <tr>
                        <td>Arrive date:".$a_date.' '."</tr>
                      <tr>
                       <td>Depart time:".$time.' '."</tr>
                      <tr>
                        <td>Arrive time:".$arrive_time.' '."</tr>
                      <tr>
                        <td>Fare:".$fare."</table></div></div>";
              }

        }
      }
else{
	$output[] ="select another location";
}
}
?>
<form action="navigation.php" method="post" accept-charset="utf-8">
	<?php
	if ($value == "one_way") {
		$i = 0;
		for ($i=0; $i < $count_member ; $i++) { 
            echo $output[$i];
        }
  }else if($value == "round_trip"){
      $i = 0;
      for ($i=0; $i < $count_member_di && $count_member_ve ; $i++) { 
        echo $output1[$i].$output2[$i] ;
      }
  }else{
        echo "do not find";
    }

?>
