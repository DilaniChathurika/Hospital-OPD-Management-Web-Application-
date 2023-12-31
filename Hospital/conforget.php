<?php

require_once('connection.php');
session_start();

if(isset($_POST['forget']))
{

    $email = mysqli_real_escape_string($conn,  $_POST['email']);

    
    $npassword = mysqli_real_escape_string($conn,($_POST['npassword']));
   
    $query="SELECT * FROM `registation` WHERE email = '$email' AND password = '$npassword'";
    $result=mysqli_query($conn,$query);
    $num=mysqli_fetch_assoc($result);
    if($num>0){
       mysqli_query($conn,"UPDATE `registation` SET password='".$npassword."' WHERE  email='".$email."'")or die('query failed');
       $_SESSION ['email']=$email;
       header("Location: login.php");
    }
    else{
       //echo "<script>alert('something wrong...!')</script>";
       echo "worng...!";
        }
 
 }
?>