
<?php

require_once('connection.php');

if(isset($_POST['register']))
{
    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $nic = mysqli_real_escape_string($conn,$_POST['nic']);
    $age= mysqli_real_escape_string($conn,$_POST['age']);
    $tele = mysqli_real_escape_string($conn,$_POST['tele']);
    $district = mysqli_real_escape_string($conn,$_POST['district']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if(empty($fname) || empty($address) || empty($nic) || empty($age) || empty($tele) || empty($district) || empty($email) || empty($password))
    {
        header("Location: registation.php?error=Please fill all fields..!");
    
    }
    else
    {
    
        mysqli_query($conn, "INSERT INTO `registation`(fname,address,nic,age,tele,district,email,password)
        VALUES('$fname','$address','$nic','$age','$tele','$district','$email','$password')") or die(header("Location: appoinment.php?error=Invalied Input...!"));

        header("Location: login.php");
    }
}
?>