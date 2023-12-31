<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hospital</title>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="about.css">
        <style>
            .block{
                width: 90%;
                padding: 5px;
                margin: 30px auto;
                display: flex;
                flex-direction: row;
                justify-content: center;
            }
            .images{
                margin: 0 12px;
                box-shadow: 0 0 20px 2px rgba (0,0,0,1);
                transition: 1s;
        
            }
            .images img{
                display: block;
                width: 100%;
                border-radius: 5px;
                width: 300px;
                height: 200px;

            }
            .images img:hover{
                transform: scale(1,2);
                z-index: 1.5;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li><a class="active" href="First_Home.php">Home</a></li>
                <li><a href="#appointment">Appointment</a></li>
                <li><a href="#service">Services</a></li>
                <li><a href="about.php">About Us</a></li>    
              </ul> 
        </nav>
        <br><br><br>
       
                <div class="block">
                    <div class="images"><img src="03.jpg"></div>
                    <div class="images"><img src="04.jpg"></div>
                    <div class="images"><img src="05.jpg"></div>
                    <div class="images"><img src="06.jpg"></div>
                </div><br><br>
                <p><b>This website is designed for the out patient Department of the Hospital. It is our hope to 
                    provide efficient service to the patients, avoiding the inconvenience to the patiens and the Hospital staff.</p>
                    <p>If a patient is waiting to be admitted to the hospit or met adoctor,he or she has the option of
                        booking his or her Appointment before arriving at the hospital. this saves time for both patient and staff.
                        We hope that all of you will contribute to this.</b> 
                    </p>
           
        <footer></footer>
    </body></html>