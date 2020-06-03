
     
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
                   <?php 

                    if (isset($_SESSION['valid_user']))  

                    {
                    echo '<p>You are logged in as: '.$_SESSION['valid_user'].' <br />';    
                    echo '<a href="logout.php">Log out</a></p>';  
                    }
                   else  {    

                   if (isset($username))    {

                    // if they've tried and failed to log in 
                    echo '<p>Could not log you in.</p>';    
                    }
                        else    { 
                        // they have not tried to log in yet or have logged out 
                    echo '<p>You are not logged in.</p>';    
                }
    // provide form to log in    
                    echo '<form action="log.php" method="post">';    

                    echo '<fieldset>';    
                    echo '<legend>Login Now!</legend>';   
                    echo '<p><label for="username">UserName:</label>';    
                    echo '<input type="text" name="username" id="username" size="30"/></p>';    
                    echo '<p><label for="password">Password:</label>';    
                    echo '<input type="password" name="password" id="password" size="30"/></p>';        
                    echo '</fieldset>';    
                    echo '<button type="submit" name="login">Login</button>';    
                    echo '</form>';

  } 
  ?> 
  <p><a href="members_only.php">Go to Members Section</a></p>










    