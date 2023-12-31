
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css">
        <style>
            body{
                background-image:url(admin.jpg);
                background-size:cover;
                background-attachment:fixed;
            }
        </style>
    </head>
    <body>
       
    <br><br><br>
           <section><div class="box"><h1>Login For Admin </h1>
        <br>
    <form method="post" action="adminconnects.php">

    <?php if (isset($_GET['error'])){?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }?>

        <p>Username</p> 
        <input type="text" name="username" placeholder="Enter Username">
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <input type="submit" name="Login" value="Login">
    </form>
    <p>If You forget your passwor , click here <a href=forget.php>Forget password</a></p>
<footer></footer>
</body>
</html>

