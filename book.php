<?php
include_once 'db.php';

   $message  = '';

if(isset($_POST['submit']))
{    
     $names = $_POST['names'];
     $no = $_POST['no'];
     $phone = $_POST['phone'];
     $date = $_POST['date'];
     $avail = $_POST['avail'];
     $destination = $_POST['destination'];
     $paytype = $_POST['paytype'];
     $sql = "INSERT INTO book (names,no,phone,date,avail,destination,paytype)
     VALUES ('$names','$no','$phone','$date','$avail','$destination','$paytype')";
 
     if (mysqli_query($conn, $sql)) {

        $message ='data inserted successfully';
        //echo "New record has been added successfully !";
     }

      else {
        //echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
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
                                    <img src="img/volcano/logo.png" style="width:200px; ">                                </a>
                                    </a>
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
                                        <a href="#"> <i class="fa fa-phone"></i> +250 78 8 35 12 53</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn4" href="administrator/index.php"><i class='fa fa-key'></i>Login</a>
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
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Reserve Your Ticket Now</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="apply_form_area">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">




<form action="book.php" method="post">
<div class="row">
 <div class="col-lg-12">
 <!-- <div class="apply_info_text text-center">
 <h3>Booking Information</h3>
  </div> -->
 
 <?php if (!empty($message)): ?>
       
      <div class="alert alert-success">
      <?php echo $message;  ?>
      </div>

      <?php endif; ?>


 </div>


<div class="col-md-12">
<div class="single_field">
<label>Names</label>
<input type="text" name="names" class="form-control">
</div>
</div>

<div class="col-md-12">
<div class="single_field">
<label>No</label>
<input type="text" name="no" class="form-control">
</div>
</div>

<div class="col-md-12">
<div class="single_field">
<label>Phone</label>
<input type="mobile" name="phone" class="form-control">
</div>
</div>

<div class="col-md-12">
<div class="single_field">
<label>Date</label>
<input type="date" name="date" class="form-control">
</div>
</div>

<div class="col-md-12">
<div class="single_field">
<label>Bus Avail</label>

<select name="avail">

<option value="" selected hidden>Available Buses</option>

<!-- <option value=""></option> -->
<?php 


$query = mysqli_query($conn, "SELECT DISTINCT departure FROM available");
$query_display = mysqli_query($conn,"SELECT * FROM available");
while ($row = mysqli_fetch_array($query)){
echo "<option value='" . $row['departure']."'> ". $row['departure'] . "</option>";
}
?>
</select>


</div>
</div>

<div class="col-md-12">
<div class="single_field">
<label>Destination</label><br>
<br> 
<input type="radio" name="destination" value="Kigali - Base" >
<label>Kigali - Base <b>1000Rwf</b></label><br>

<input type="radio" name="destination" value="Kigali - Gakenke" >
<label>Kigali - Gakenke <b>1000Rwf</b></label><br>

<input type="radio" name="destination" value="Kigali - Musanze" >
<label>Kigali - Musanze <b>1000Rwf</b></label><br>
<br>
</div>
</div>

<div class="col-md-12">
<div class="single_field">
<label>Payment Type</label>
<br><br>
<input type="radio" name="paytype" value="airtel"  style="height:20px; width:20px" required/>
<label><img style="width: 50px" src="airtel.png"></label>

<input type="radio" name="paytype" value="momo"  style="height:20px; width:20px" required/>
<label><img style="width: 50px" src="momo.jpg"></label>

<input type="radio" name="paytype" value="master"  style="height:20px; width:20px" required/>
<label><img style="width: 50px" src="master.png"></label>

<input type="radio" name="paytype" value="visa"  style="height:20px; width:20px" required/>
<label><img style="width: 50px" src="visa.jpg"></label>
<br><br><br><br>
</div>
</div>

<br>
<div class="col-md-12">
<input onclick="return confirm('Are you sure want to perform this entry?')" type="submit" class="btn btn-primary" name="submit" value="Save ">

<input type="submit" class="btn btn-danger" name="" value="Cancel">
</div>
</div>        
</div>
</form>

</div>
</div>



    </div> 
    <!-- works_area_end  -->
    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">

                                    <img src="img/volcano/logo.png" style="width:200px; ">                                </a>
                            </div>
                            <p>
                                info@volcanoexpress.co.rw <br>
                                +250788351253 <br>
                                
                            </p>
<!-- <i class="fa fa-bus" 
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
                            </p> -->
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
                            <form name="form1" action="#" class="newsletter_form">
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