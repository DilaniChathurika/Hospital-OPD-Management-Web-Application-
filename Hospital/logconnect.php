<?php
session_start();
include "connection.php";

if(isset($_POST['email']) && isset($_POST['password']));
{
    function validate ($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if(empty($email))
    {
        header("Location: login.php?error=Email is required !");
        exit();
    }
    elseif(empty($pass))
    {
        header("Location: login.php?error=Password is required !");
        exit();
    }
    else{

        $sql = "SELECT * FROM registation WHERE email='$email' AND  password='$pass'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)===1)
        {
        $rows=mysqli_fetch_assoc($result);
  
            if($rows['email']===$email && $rows['password']===$pass)
            {
            $_SESSION['email']=$rows['email'];
            $_SESSION['passwod']=$rows['password'];
            header("Location: Home.php");
            exit();
            }
            else
            {
            header("Location: login.php?error=Incorrect email or password");
            exit();
            }
        }
        else
        {
        header("Location: login.php?error=Incorrect email or password !");
        exit();
        }
        
    }

}/*
else 
{
    header("Location: login.php");
    exit();
}*/
?>