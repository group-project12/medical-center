<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-page</title>
    <!--font awesome link--> 
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--css link-->
    <link rel="stylesheet" href="style.css">
</head>
    <body>
     
        <div class="admin-container">
            <div class="navigation">
                <ul>
                    
                    <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-heart-pulse fa-beat"></i></span>
                        <span class="title"><h2>Medicare</h2></span>
                        </a>
                    </li>
    
                    <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-table-columns"></i></span>
                        <span class="title">Dashboard</span>
                        </a>
                    </li>
                     
                    <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-hospital-user"></i></span>
                        <span class="title">Patient</span>
                        </a>
                    </li>
                    
                    <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-user-doctor"></i></span>
                        <span class="title">Doctors</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="">
                        <span class="icon"><i class="fa-solid fa-calendar-check"></i></span>
                        <span class="title">Appointment</span>
                        </a>
                    </li>
                    
                    <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-list-check"></i></span>
                        <span class="title">setting</span>
                        </a>
                    </li>
                    
                    <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                        <span class="title">sign out</span>
                        </a>
                    </li>
                    
                </ul>

            </div> 

            <div class="main">
                <div class="topbar">
                    <div class="toggle" onclick="toggleMenu();"></div>
                    <div class="search">
                        <label>
                            <input type="text" placeholder="search here">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </label>  
                    </div>
                    <div class="user">
                        <img src="image/profile.png">
                    </div> 
                </div>

                <div class="cardbox">
                    
                </div>

            </div>
        </div>    







        <script>
            function toggleMenu()
            {
                let toggle = document.querySelector('.toggle');
                let navigation =document.querySelector('.navigation');
                let main =document.querySelector('.main');
                toggle.classList.toggle('active');
                navigation.classList.toggle('active');
                main.classList.toggle('active') ;
               
            }
        </script>



    </body>
</html>












































































            <!-- <div class="side-bar">

                <div>
                <a href="#" class="logo"><i class="fa-solid fa-heart-pulse fa-beat"></i> Medcare </a> 
                </div>

                <ul>
                    <li><a href="#"><i class="fa-solid fa-table-columns"></i>Dashbard</a></li>
                    <li><a href="#"><i class="fa-solid fa-hospital-user"></i>Patients</a></li>
                    <li><a href="#"><i class="fa-solid fa-user-doctor"></i> Doctors</a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-check"></i> Appointement</a></li>
                </ul>
                    
            </div>
        <div class="admin-container">
            <div class="header">
                <div class="user">
                    <a href="#" class="btn">home</a>
                    <div
                </div>
            </div>

        </div> --> 










