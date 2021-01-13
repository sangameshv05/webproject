<?php
    session_start();
    
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if($_SESSION['temp'] == TRUE){
        $_SESSION['temp'] = TRUE;
    }else{
        $_SESSION['temp'] = FALSE;
    }
?>
<html>
<head>
    <title>  Login Form  </title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="main.css"> 

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
    <!--- Navbar --->
    <nav class="navbar navbar-expand-lg ">
         <div class="container">
         <a class="navbar-brand text-white" href="./index.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i>Online Examination Tool</a>
         <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="nvbCollapse">
            <ul class="navbar-nav ml-auto">
               <?php
                  if($_SESSION['temp']){echo'
                     <li class="nav-item active pl-1">
                        <a class="nav-link" href="#"><i class="fa fa-user fa-fw mr-1"></i>'.$_SESSION['name'].'</a>
                     </li>';}?>
                  
                  <?php
                     if(!$_SESSION['temp']){echo'
                     <li class="nav-item pl-1">
                        <a class="nav-link" href="./login.php"><i class="fa fa-user-plus fa-fw mr-1"></i>Login</a>
                     </li>';
			
                     }else{echo'
                     <li class="nav-item pl-1">
                        <a class="nav-link" href="./logout.php"><i class="fa fa-sign-in fa-fw mr-1"></i>Log Out</a>
                     </li>';
                     }
                  ?>
            </ul>
         </div>
         </div>
      </nav>

    <div  class="h-100 w-100 mybg d-flex justify-content-center">
        <div class="description col-md-4 ">
            <h1 class="text-info">    Welcome To Online Examination Tool
                <p class="pt-3"> It is also needed less manpower to conduct the examination. Almost all organizations now-a-days, 
                    are conducting their objective exams by online examination system, it saves students time in examinations.
                </p>   
                <a class="btn btn-outline-secondary btn-lg viewbtn" href="./login.php">Get Started</a>  
            </h1>  
        </div>
    </div>
    <div class="container-fluid my-5 overflow-auto"  style='padding-top: 120px; padding-bottom: 120px;'>
        <div class="row">
            <div class=" pt-5 roundBorder col-md-6 overflow-hidden" id="aboutus">
                <hr class="mt-5 pt-5"/>
                <h1 class="p-5 text-info">Features</h1>
                <ul class="ml-3 mb-5">
                    <li class="my-3">As a result of this, organizations are releasing results in less time. It also helps the environment by saving paper.</li>
                    <li class="my-3">Organizations can also easily check the performance of the student that they give in an examination.</li>
                </ul>
                <hr class="mt-5"/>
            </div>

            <div class="col-md-6 pl-5 overflow-auto">
                <img class="myimg" src="./bg2.jpg" alt="Mike">
            </div>
        </div>
    </div>
    <div class="container  overflow-auto" id="features" style='padding-top: 120px; padding-bottom: 120px;'>
         <div class="row">
            <div class=" text-justify p-5">
                <h1 class="text-info text-center mb-4">What is an Online Examination System?</h1>
                <p >In an online examination system examine get their user id and password with his/her admit card.

                    This id is already saved in the examination server. When examine login to the server he/she get his/her profile already register.
                </p>
                <br />
                <ul class="ml-n3 ">
                    <li class="my-3">All answers given by examine are saved into the server with his/her profile information.</li>
                    <li class="my-3">checking the answer easy and error free as computers are more accurate than man and provide fast results too.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5 overflow-auto" style='padding-top: 120px; padding-bottom: 120px;'>
         <div class="row">
            <div class="col-md-6 overflow-hidden">
               <img src="bg3.jpg" alt="Mike" class="myimg mt-5">
            </div>
            <div class="col-md-6 text-justify p-5">
               <h1 class=" text-left mb-4">Project objective:</h1>
               <p class="">Online examination system is a non removable examination pattern of today’s life.

                    We need more time saving and more accurate examination system as the number of applicants is increasing day by day.

                    For all IT students and professionals, it is very important to have some basic understanding about the online examination system.
</p>
               <br />
               <div class="pt-2 pb-3"> <a class="py-2 btn btn-dark px-4" href="./login.php">Start Now</a> </div>
            </div>
        </div>
    </div>


    
</body>
</html>