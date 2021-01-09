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
         <a class="navbar-brand text-white" href="./index.php"><i class="fa fa-graduation-cap fa-lg mr-2"></i>Learn Academy</a>
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
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./reviewf/review.php"><i class="fa fa-th-list fa-fw mr-1"></i>Review</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./aboutf/about.php"><i class="fa fa-info-circle fa-fw mr-1"></i>About Us</a>
                  </li>
                  <li class="nav-item pl-1">
                     <a class="nav-link" href="./contactf/contact.php"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contact Us</a>
                  </li>
                  
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
                <p class="pt-3"> It is also needed less manpower to execute the examination. Almost all organizations now-a-days, 
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


    <div class="container  overflow-auto" id="contactus" style='padding-top: 120px; padding-bottom: 120px;'>
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>

        <div class="row">
            <div class="col-md-9  mb-5">
                <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="mb-0">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class=" mb-0">
                                <input type="text" id="email" name="email" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class=" mb-0">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">

                            <div class="">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control " placeholder="Your Message"></textarea>
                            </div>

                        </div>
                    </div>

                </form>

                <div class="text-center text-md-left"><?php echo '
                    <a class="btn btn-primary" href="#" onClick="alert(';
                        if($_SESSION['temp'] == FALSE){
                            echo'\'Please LogIn!\'';
                        }else{
                            echo'
                                \'Dear '.$_SESSION['name'].', Thanks for choosing Learn Academy. \nWe will contact you through your mail - '.$_SESSION['email'].'\'
                            ';
                        }echo')">Send »</a>';?>
                </div>
                <div class="status"></div>
            </div>
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Bangalore, CA 94126, India</p>
                    </li>

                    <li><i class="fa fa-phone fa-2x"></i>
                        <p>+91 01234 56789</p>
                    </li>

                    <li><i class="fa fa-envelope mt-2 fa-2x"></i>
                        <p>contact@projectideas.com</p>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="mt-5"/>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook fa-2x colorme"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter fa-2x colorme"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram fa-2x colorme"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus fa-2x colorme"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-envelope fa-2x colorme"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>	
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center ">
                <p class="h6">© 2020 Copyright:<a href="#"> ProjectIdeas.</a> All right Reversed.</p>
            </div>
            <hr>
        </div>
    </div>
</body>
</html>