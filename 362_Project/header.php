<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
        <link rel="stylesheet" href="bootstrap/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">    
        <link rel="shortcut icon" href="img/main_icon.webp"/>
        <link rel="apple-touch-icon" href="img/main_icon.webp"/>
        
        <title>Nostalji Plak</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index,follow"/>
        <meta name="rating" content="general">
        <meta name="keywords" content="Plak,Nostalji,Pikap,Pickup,Nostalgia"/>
        <meta name="copyright" content="All Rights Reserved.">
        
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/owl.carousel.min.js"></script>
       
    </head>
    <body>
<nav class="navbar navbar-inverse navabar-fixed-top">  
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                     <a href="index.php" class="navbar-brand"><img src="img/main_icon.webp" class="bglogosticky lazy" alt="site logo" style="max-height:25px;width:auto;align-self:center;"/></a>
                     <a href="index.php" style="align-self:center;font-size:1vw;" class="navbar-brand">Nostalji Plak</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">
                           <?php
                           if(isset($_SESSION['email'])) // if the user logged in //
                           {
                           ?>
                           <li><a href="cart.php" style="font-size:1vw;"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</a></li>
                           <li><a href="logout.php" style="font-size:1vw;"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
                           <?php
                           }
                           else // if not logged in //
                           {
                            ?>
                            <li><a href="signup.php" style="font-size:1vw;"><span class="glyphicon glyphicon-user"></span>  Sign Up</a></li>
                           <li><a href="login.php" style="font-size:1vw;"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
                           <?php
                           }
                           ?>
                       </ul>
                   </div>
               </div>
</nav>