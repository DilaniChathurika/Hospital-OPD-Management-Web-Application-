<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hospital</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="appoinment.css">
    </head>
    <body background="doctor.jpg">
        <nav>
            <ul>
                <li><a class="active" href="Home.php">Home</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp    
                <li><a href="login.php">Logout</a></li> 
            </ul> 
        </nav><br>
        <section><div class="box"><br><br><br>
            <p class="head">Appointment</p>
            <br><br><br>
        <form method="post" action="conappo.php">
        <?php if (isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>
            <p>Date</p> 
            <input type="date" name="date" placeholder="Ex-: 02-08-2022">

            <?php 
    if(isset($_POST['submit']))
    {
    $exp_date="2022/08/01";
    $date = mysqli_real_escape_string($conn,$_POST['date']);
    $exp=strtotime($exp_date);
    $td=strtotime($date);

    if($td<$exp){
        header("Location: appoinment.php?error=Date wrong...!");
        exit();
    }
    }
    
    ?>
            
            <p>Time</p>
            <select name = "dropdown">
                <option>Morning</option>
                <option>Evening</option>
            </select>
            <p>Name</p> 
            <input type="text" name="name" placeholder="Ex-: G. Chathu Amaya">
            <p>Age</p> 
            <input type="text" name="p_age" placeholder="Ex-: 23">
            <p>Address</p> 
            <input type="text" name="Address" placeholder="Ex-: No 58,Yayawaththa, Tangalle.">
            <p>NIC Number</p> 
            <input type="text" name="p_nic" placeholder="Ex-: 995487122V">
            <p>Service</p>
            <select name="Dropdown">
                <option>OPD</option>
                <option>Dentals</option>
            </select>
            <p>Telephone Number</p> 
            <input type="text" name="p_telephone" placeholder="Ex-: 0715561000"><br><br><br><br><br>
            <input type="submit" name="submit" value="submit">
            
        </form>
    </body>
    </html>
    