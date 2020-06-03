<?php
   require 'db.php';

   $message  = '';

  if (isset($_POST['username']) && isset($_POST['password']) ) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    $sql = 'INSERT INTO  user(username,password) VALUES(:username, :password)';
    
    $statement = $conn->prepare($sql);
    
    if($statement->execute([':username' => $username, ':password' => $password]) ) {

      $message ='data inserted successfully';
    }

    }  
?>





<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>bus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
<!-- header-start -->
<header>
<div class="header-area ">
<div id="sticky-header" class="main-header-area">
<div class="container-fluid ">
<div class="header_bottom_border">
<div class="row align-items-center">
<div class="col-xl-3 col-lg-2">
<div class="logo">
<a href="index.html">

        <img src="img/volcano/logo.png" style="width:200px; ">                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="Loan.html">Activities</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <!-- <li><a href="apply.php">Register</a></li> -->
                                                    <li><a href="book.php">Reservation</a></li>
                                                    <li><a href="table.php">Price & Departure Time</a></li>
                                                </ul>
                                            </li>

                          <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#"> <i class="fa fa-phone"></i> +250 78 72 60 27 0</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn4" href="administrator/index.php"><i class='fa fa-key'></i> Login</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

      <!-- bradcam_area  -->
      <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <!-- <div class="row">
                <div class="col-xl-12"> -->
                    <div class="bradcam_text">
                        <h3>Register Now</h3>
                    </div>
     
    <div class="apply_form_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
          
               <div class="card-body">
      
      <?php if (!empty($message)): ?>
       
      <div class="alert alert-success">
      <?php echo $message;  ?>
      </div>

      <?php endif; ?>
      
     


        <form action="apply.php" method="POST" class="apply_form">
       
        <div class="row">
         <div class="col-lg-12">
              
        <!-- <div class="col-md-12">
        <div class="single_field">
        <input type="text" placeholder="user" name="user" required/>
        </div>
        </div>
         -->
        <div class="col-md-12">
        <div class="single_field">
        <input type="text" placeholder="username" name="username" required/>
        </div>
        </div>
       
        <div class="col-md-12">
        <div class="single_field">
        <input type="password" placeholder="Password" name="password" required/>
        </div>
        </div>
       
        <!-- <div class="col-md-12">
        <div class="single_field">
        <input type="phone" placeholder="phone" name="phone" required/>
        </div>
        </div>
 -->
        <!-- <div class="col-md-12">
        <div class="single_field"> -->
<!-- <input type="text" placeholder="user" name="user" required/>-->
         <!-- <select class="" name="level"  >
             <option selected hidden>Level</option>
             <option>user</option>
             
         </select>
    
        </div>
        </div> -->
<br><br><br>

        
        <div class="col-md-12">
        <div class="submit_btn">
        <button type="submit" class="btn btn-info">Rgister</button>
        </div>
        </div>
        
         </div>
        </form>

       </div>
        </div>
        </div>
    </div>

      </div>
    </div>


    <!--/ apply_form_area -->
    


    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">
<i class="fa fa-bus" 
        style="background: white;
        height: 20px;
        width:7%; 
        border-radius:3px;
        position:center; 
        ">
           </i>
        <b>Booking</b>                                </a>
                            </div>
                            <p>
                                finloan@support.com <br>
                                +10 873 672 6782 <br>
                                600/D, Green road, NewYork
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul>
                                <li><a href="#">SEO/SEM </a></li>
                                <li><a href="#">Web design </a></li>
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Digital marketing</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>

</body>

</html>