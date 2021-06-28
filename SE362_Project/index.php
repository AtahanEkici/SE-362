<?php
if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">
        <link rel="stylesheet" href="bootstrap/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/style.css" type="text/css">    
        <link rel="shortcut icon" href="img/main_icon.webp"/>
        <link rel="apple-touch-icon" href="img/main_icon.webp" type="img/main_icon.webp"/>
        
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
        <div>
           <?php
            require 'header.php';
           ?>

<div style="text-align: center;">
<h1>We sell nostalgic pickups for our customers.</h1>
<a href="products.php" class="btn btn-danger">Shop Now</a>
<div id="owl" style="align-content: center;margin-top: 10%" class="owl-carousel owl-theme owl-wrapper">
 
<img class="lazyOwl" src="img/1.webp" alt="foto"/>

<img class="lazyOwl"  src="img/2.webp" alt="foto"/>

<img class="lazyOwl"  src="img/3.webp"  alt="foto"/>

<img class="lazyOwl" src="img/4.webp"  alt="foto"/>   

<img class="lazyOwl" src="img/5.webp"  alt="foto"/>

<img class="lazyOwl" src="img/6.webp"  alt="foto"/>

<img class="lazyOwl" src="img/7.webp"  alt="foto"/>

<img class="lazyOwl" src="img/8.webp"  alt="foto"/>

<img class="lazyOwl" src="img/9.webp"  alt="foto"/>

<img class="lazyOwl" src="img/10.webp"  alt="foto"/>

<img class="lazyOwl" src="img/11.webp"  alt="foto"/>

<img class="lazyOwl" src="img/12.webp"  alt="foto"/>
</div>
</div>
<br><br><br><br><br><br>
 <?php require 'footer.php'; ?>
</div>
    
<script>
$("#owl").owlCarousel
({
    items : 3,
    lazyLoad : true,
    autoHeight : true,
    loop:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:false
});   
</script>
</body>
</html>