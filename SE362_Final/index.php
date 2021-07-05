<?php
if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
function errorHandler() 
{
    header('Location: error.php');
}
set_error_handler('errorHandler');
?>

        <div>
           <?php require 'header.php'; ?>

<div style="text-align: center;">
<h1 style="font-size:2vw;">We sell nostalgic pickups for our customers.</h1>
<?php
if(isset($_SESSION['email'])) // if the user is not logged in then proceed to the login page //
{
    echo '<a href="products.php" class="btn btn-danger btn-lg">Our Products</a>'; // If not logged in do not show products page //
}
?>
<div id="owl" style="align-content:center;margin-top: 10%;font-size:0.8vw;" class="owl-carousel">
<a href="products.php#product_1"><img class="lazyOwl" src="img/1.webp" alt="photo"/></a>
<a href="products.php#product_2"><img class="lazyOwl" src="img/2.webp" alt="photo"/></a>
<a href="products.php#product_3"><img class="lazyOwl" src="img/3.webp" alt="photo"/></a>
<a href="products.php#product_4"><img class="lazyOwl" src="img/4.webp" alt="photo"/></a>   
<a href="products.php#product_5"><img class="lazyOwl" src="img/5.webp" alt="photo"/></a>
<a href="products.php#product_6"><img class="lazyOwl" src="img/6.webp" alt="photo"/></a>
<a href="products.php#product_7"><img class="lazyOwl" src="img/7.webp" alt="photo"/></a>
<a href="products.php#product_8"><img class="lazyOwl" src="img/8.webp" alt="photo"/></a>
<a href="products.php#product_9"><img class="lazyOwl" src="img/9.webp" alt="photo"/></a>
<a href="products.php#product_10"><img class="lazyOwl" src="img/10.webp" alt="photo"/></a>
<a href="products.php#product_11"><img class="lazyOwl" src="img/11.webp" alt="photo"/></a>
<a href="products.php#product_12"><img class="lazyOwl" src="img/12.webp" alt="photo"/></a>
</div>
</div>
<?php require 'footer.php'; ?>
</div> 
<script>
$("#owl").owlCarousel
({
    items: 4,
    lazyLoad: true,
    autoHeight: true,
    loop: true,
    margin: 20,
    autoplay: true,
    autoplayTimeout: 1500,
    autoplayHoverPause: false,
    pagination: false,
    mouseDrag: false,
    touchDrag: false
});   
</script>
