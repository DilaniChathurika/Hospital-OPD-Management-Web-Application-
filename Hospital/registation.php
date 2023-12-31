

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hospital</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="registation.css">
    </head>
    <body background="doctor.jpg">
        <nav>
            <ul>
                <li><a class="active" href="First_Home.php">Home</a></li>
                <li><a href="#appointment">Appointment</a></li>
                <li><a href="#services">Service</a></li>
                <li><a href="about.php">About Us</a></li>    
              </ul> 
        </nav><br><br><br>
        <section><div class="box"><h1>Register Here</h1>
            <br>
        <form method="post" action="regconnect.php">
        <?php if (isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>
            <p>Full Name</p> 
            <input type="text" name="fname" placeholder="Ex-: Chathu Amaya Gunathillake">
            <p>Address</p> 
            <input type="text" name="address" placeholder="Ex-: No 58,Yayawaththa, Tangalle.">
            <p>NIC Number</p> 
            <input type="text" name="nic" placeholder="Ex-: 995487122V">
            <p>Age</p> 
            <input type="text" name="age" placeholder="Ex-: 23">
            <p>Telephone Number</p> 
            <input type="text" name="tele" placeholder="Ex-: 0715561000">
            <p>District</p> 
            <input type="text" name="district" placeholder="Ex-:Hambantota">
            <p>E-Mail Address</p> 
            <input type="text" name="email" placeholder="Ex-: amaya99@gmail.com">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password of your e-mail"><br><br><br>
            <input type="submit" name="register" value="Register Now ">
        </form>
        </body>
        </html>