<?php
session_start();
include "connection.php";

if(isset($_POST['username']) && isset($_POST['password']));
{
    function validate ($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($username))
    {
        header("Location: admin.php?error=Username is required !");
        exit();
    }
    elseif(empty($pass))
    {
        header("Location: admin.php?error=Password is required !");
        exit();
    }
    else{

        $sql = "SELECT * FROM admin WHERE username='$username' AND  password='$pass'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)===1)
        {
        $rows=mysqli_fetch_assoc($result);
  
            if($rows['username']===$username && $rows['password']===$pass)
            {
            $_SESSION['username']=$rows['username'];
            $_SESSION['passwod']=$rows['password'];
            header("Location: adminaccount.php");
            exit();
            }
            else
            {
            header("Location: admin.php?error=Incorrect Username or password");
            exit();
            }
        }
        else
        {
        header("Location: adminssss.php?error=Incorrect Username or password !");
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