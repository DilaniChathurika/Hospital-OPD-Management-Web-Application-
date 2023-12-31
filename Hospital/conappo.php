<?php

require_once('connection.php');

if(isset($_POST['submit']))
{
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $dropdown = mysqli_real_escape_string($conn,$_POST['dropdown']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $p_age= mysqli_real_escape_string($conn,$_POST['p_age']);
    $Address = mysqli_real_escape_string($conn,$_POST['Address']);
    $p_nic= mysqli_real_escape_string($conn,$_POST['p_nic']);
    $Dropdown = mysqli_real_escape_string($conn,$_POST['Dropdown']);
    $p_telephone = mysqli_real_escape_string($conn,$_POST['p_telephone']);

    if(empty( $date) || empty($dropdown) || empty($name) || empty($p_age) || empty($Address) || empty($p_nic) || empty($Dropdown) || empty($p_telephone))
    {
        header("Location: appoinment.php?error=Please fill all fields...!");
        exit();
    }
    else
    {
    mysqli_query($conn, "INSERT INTO `appoinment`(date,time,name,p_age,address,p_nic,service,p_telephone)
    VALUES('$date','$dropdown','$name','$p_age','$Address','$p_nic','$Dropdown','$p_telephone')") or 
    die( header("Location: appoinment.php?error=Invalied Input...!"));
     
       // header("Location: Home.php");
        
    }
}
    ?>
    <?php  
    
    $sql="SELECT COUNT(number) AS total FROM `appoinment`";
    $result=mysqli_query($conn,$sql);
    $values=mysqli_fetch_assoc($result);
    $num_rows=$values['total'];
   // echo "Peter is " . $age['Peter'] . " years old.";
    echo "you are the ". $num_rows." patient for today ". $dropdown." in ". $Dropdown.".";//.$num_rows*10/60+8.;"."+$num_rows%60.;
    ?>