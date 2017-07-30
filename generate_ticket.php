<?php include 'core/connect.php';?>
<div class="table-responsive" style="border:1px solid #ddd;">          
      <table class="table">
        <thead>
          <tr class="active">
            <th>STT</th>
            <th>Title</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>ID No</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>
        </thead>
        <tbody style="text-align:left;">
           <?php
                include 'core/connect.php';
                $select = "SELECT * from passenger";
                $result = mysqli_query($connect, $select);
                $i= 0;
                if (!$result) {
                  echo "can not show product";
                }else{
                  while ($row = mysqli_fetch_assoc($result)) {
                    $i++;
                    ?>
                    <tr>
                    
                      <td><?php echo $i;?></td>
                        <td><?php echo $row['title'];?></td>
                        <td><?php echo $row['first_name'];?></td>
                        <td><?php echo $row['last_name'];?></td>
                        <td><?php echo $row['passport'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                    </tr>
                    <?php 
                    }
                  }
                  ?>
          <tr class="active">
            <tr class="active">
              <th>From</th>
              <th>To</th>
              <th>Date</th>
              <th>Arrive time</th>
              <th>Depart time</th>
              <th>Fare</th>
            </tr>
            <tr>
              <td>Quang Tri</td>
              <td>Ha Noi</td>
              <td>12/05/1017</td>
              <td>10:00AM</td>
              <td>3:00PM</td>
              <td>120000</td>
            </tr>
          </tbody>
        </table>
        <table class="table">
          <thead>
            <tr class="active">
              <th>Please note:</th>
            </tr>
          </thead>
          <tbody style="text-align:left;">
            <tr>
              <td>All guests, including children and infants, must present identification at check-in!!!</td>
            </tr>
          </tbody>
        </table>
      </div>
      <input type="button" name="previous" class="previous action-button" value="Previous" />
      <input type="submit" name="next" class="submit action-button" value="Submit" />