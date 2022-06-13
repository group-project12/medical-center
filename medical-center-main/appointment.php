<?php
$fname="";
$mname="";
$lname="";
$age="";
$gender="";
$pnumber="";
$date="";
$address1="";
$address2="";
$error=array();
$congra="";

//database connection

$conn=mysqli_connect("localhost","root","","appointment");

if(isset($_POST['submit']))
{
    $fname=mysqli_real_escape_string($conn,$_POST['fname']);
    $mname=mysqli_real_escape_string($conn,$_POST['mname']);
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $age=mysqli_real_escape_string($conn,$_POST['age']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $pnumber=mysqli_real_escape_string($conn,$_POST['pnumber']);
    $date=mysqli_real_escape_string($conn,$_POST['date']);
    $address1=mysqli_real_escape_string($conn,$_POST['address1']);
    $address2=mysqli_real_escape_string($conn,$_POST['address2']);

    

    $user_check_query="select * from patient where firstname = '$fname' or lastname='$lname' limit 1  ";
    $result=mysqli_query($conn,$user_check_query);
    $user=mysqli_fetch_assoc($result);

   
    isset($user['firstname']);

    //rigister 
    
        if(count($error)===0)
        {
            $query="insert into patient (firstname,middlename,lastname,age,gender,phonenumber,date,address1,address2) values('$fname','$mname','$lname','$age','$gender','$pnumber','$date','$address1','$address');";
            mysqli_query($conn,$query);
            //$congra="You are successfully registerd!";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking appointment</title>
    <!--font awesome link-->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--css link-->
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <!--js link-->
        <script src="script.js"></script>


        <section class="book" id="book">

            <h1 class="heading"> <span>Booking</span> Appointment</h1>    
        
            <div class="row">
        
                <div class="image">
                    <img src="image/book-img.svg" alt="">
                </div>
                <div class="err">
                    <?php
                        include 'err.php' ;
                    ?>
                </div>

                <?php
                    echo $congra ;
                ?>
                <form action="appointment.php" method="POST">
                    <h3>Book appointment</h3>
                    <input type="text" name="fname"  placeholder="First name" class="box">
                    <input type="text" name="mname"  placeholder="Middle name" class="box">
                    <input type="text"  name="lname" placeholder="Last name" class="box">
                    <input type="number" name="pnumber"  placeholder="Phone number" class="box">
                    <input type="number"  name="age" placeholder="Age" class="box">

                    <!-- <div class="age" name="gender" >
                        <input type="radio" placeholder="gender" > female
                        <input type="radio" placeholder="gender"> male
                    </div> -->

                    <div>
                            <select name ="gender" placeholder="Gender">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                    <input type="date" name="date" class="box">
                    <h6> Address</h6>

                    <div class="col"  >
                        <input type="text" name="address1"  placeholder="Country" class="box">
                        <input type="text" name="address2" placeholder="City" class="box">
                    </div>

                    <input type="submit" name="submit" value="Book appointment" class="btn">
                </form>
        
            </div>
        
        </section>

        <!--footer section-->
        <section class="footer" id="aboutfooter">

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