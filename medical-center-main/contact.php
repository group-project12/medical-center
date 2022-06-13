<?php 
$fname="";
$lname="";
$email="";
$subject="";
$message="";
$error=array();
$congra="";

//database connection

$conn=mysqli_connect("localhost","root","","contact");

if(isset($_POST['send']))
{
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $subject=mysqli_real_escape_string($conn,$_POST['subject']);
    $message=mysqli_real_escape_string($conn,$_POST['message']);
    
   

    $user_check_query="select * from customer where Firstname = '$fname' or Email='$email' limit 1  ";
    $result=mysqli_query($conn,$user_check_query);
    $user=mysqli_fetch_assoc($result);


    isset($user['firstname']);
    //send
        if(count($error)===0)
        {
            $query="insert into customer (Firstname,Lastname,Email,Subject,Message) values('$fname','$lname','$email','$subject','$message');";
            mysqli_query($conn,$query);
            $congra="Sent!";
        }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!--font awesome link-->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--css link-->
    <link rel="stylesheet" href="style.css">
</head>
    <body>
            <!--js link-->
        <script src="script.js"></script>

        <!--contact section-->
        <section class="cont" id="cont">
            <div class="contact">
                <div class="contactinfo">
                    <div>
                        <h2>Contact Us</h2>
                        
                        <ul class="info">

                            <li>
                                <span > <i class="fas fa-map-marker-alt"></i></span>
                                <span>Addis ababa, Ethiopia</span>
                            </li>

                            <li>
                                <span> <i  class="fas fa-envelope"> </i></span>
                                <span>medcarehospital@gmail.com </span>
                            </li>

                            <li>
                                <span> <i class="fas fa-phone"></i> </span>
                                <span>+251-222-3333</span>
                            </li>
                        </ul>
                        <div>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="contactform">

                    <h2>Get in Touch</h2>
                    <div class="err">
                        <?php
                            include 'err.php' ;
                        ?>
                    </div>

                    <?php
                        echo $congra ;
                    ?>
                    <form action="contact.php" method="post">
                        <div class="form">

                            <div class="inputbox n1">
                                <input type="text" name="fname"  required>
                                <span>First name</span>
                            </div>

                            <div class="inputbox n1">
                                <input type="text" name="lname" required>
                                <span>Last name</span>
                            </div>

                            <div class="inputbox n1">
                                <input type="email" name="email" required>
                                <span>Email</span>
                            </div> 

                            <div class="inputbox n1">
                                <input type="text" name="subject" required>
                                <span>Subject</span>
                            </div>

                            <div class="inputbox n2 ">
                                <textarea required  name="message"> </textarea>
                                <span>Message</span>
                            </div>

                            <div class="inputbox n2">
                                <input type="submit" name="send" value="send">
                            </div>

                        </div>

                    </form>
                    
                </div>

            </div>

        </section>

        <!-- contact section end-->


        <!--footer section-->
        <section class="footer">

            <div class="boxx-container">
        
                <div class="boxx">
                    <h3>quick links</h3>
                    <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
                    <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
                    <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
                    <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
                    <a href="#booking"> <i class="fas fa-chevron-right"></i> book appointment</a>
                    <a href="#contact us"> <i class="fas fa-chevron-right"></i> contact us</a>
                
                </div>
        
                <div class="boxx">
                    <h3>our services</h3>
                    <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> physiotherapy </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> cardiology </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
                    <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
                </div>
        
                <div class="boxx">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"></i> +251-912-3456 </a>
                    <a href="#"> <i class="fas fa-phone"></i> +251-222-3333 </a>
                    <a href="#"> <i class="fas fa-envelope"></i> medcareclinics@gmail.com </a>
                    <a href="#"> <i class="fas fa-envelope"></i> medcarehospital@gmail.com </a>
                    <a href="#"> <i class="fas fa-map-marker-alt"></i> Addis ababa, Ethiopia </a>
                </div>
        
                <div class="boxx">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                    <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                    <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
                </div>
        
            </div>
        
            <div class="credit"> created by <span>our team</span> | all rights reserved </div>
        
        </section>
        
        <!-- footer section ends -->

    </body>

</html>