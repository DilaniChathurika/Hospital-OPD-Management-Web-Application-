<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Forget Password</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
    </head>
    <body background="doctor.jpg">
        <nav>
            <ul>
                <li><a class="active" href="First_Home.php">Home</a></li>
                <li><a href="#appointment">Appointment</a></li>
                <li><a href="#servces">Contact</a></li>
                <li><a href="about.php">About Us</a></li>    
              </ul> 
        </nav>
    <br><br><br>
           <section><div class="box"><h1>Forget Password </h1>
        <br>
    <form method="post" action="conforget.php">
    <?php if (isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>

        <p>E-Mail</p> 
        <input type="text" name="email" placeholder="Enter Email">
        <p>Password</p>
        <input type="password" name="npassword" placeholder="Enter New Password"><br><br><br>
        <input type="submit" name="forget" value="submit">
    </form>
<footer></footer>
</body>
</html>