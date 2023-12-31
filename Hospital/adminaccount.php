<?php
include_once('connection.php');
$query="SELECT * FROM `appoinment`";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
    <title><head>
        Display appoinment
    </head></title>
    <body>
        <table align="center" border="0px" style="width:1300px; line-height:40px; ">
        <tr><th colspan="9" style="background-color:blue;">
<h1>Appoinment Details</h1>
        </th></tr>
        
            <t>
                <th style="background-color:gray;">Number</th>
                <th style="background-color:gray;">Date</th>
                <th style="background-color:gray;">Time</th>
                <th style="background-color:gray;">Name</th>
                <th style="background-color:gray;">Age</th>
                <th style="background-color:gray;">Address</th>
                <th style="background-color:gray;">NIC</th>
                <th style="background-color:gray;">Service</th>
                <th style="background-color:gray;">Telephone Number</th>
            </t><?php 
            while ($rows=mysqli_fetch_assoc($result)){
            ?>
        <tr>
            <td style="background-color:#d9d9d9;"><?php  echo $rows['number'];?></td>
            <td style="background-color:#e6e6e6;"><?php  echo $rows['date'];?></td>
            <td style="background-color:#d9d9d9;"><?php  echo $rows['time'];?></td>
            <td style="background-color:#e6e6e6;"><?php  echo $rows['name'];?></td>
            <td style="background-color:#d9d9d9;"><?php  echo $rows['p_age'];?></td>
            <td style="background-color:#e6e6e6;"><?php  echo $rows['address'];?></td>
            <td style="background-color:#d9d9d9;"><?php  echo $rows['p_nic'];?></td>
            <td style="background-color:#e6e6e6;"><?php  echo $rows['service'];?></td>
            <td style="background-color:#d9d9d9;"><?php  echo $rows['p_telephone'];?></td>
        </tr>
        <?php } ?></table>
    </body>
</html>