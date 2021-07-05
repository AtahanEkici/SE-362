<?php
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
    
    if(!isset($_SESSION['email'])) // if the user is not logged in then proceed to the login page //
    {
        header('location: login.php');
    }
    
    require 'check_if_added.php';
?>

<style>
html 
{
  scroll-behavior: smooth;
}
div:target 
{
  border: 5px solid yellow;
}
</style>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to our Nostalgic Pickup Store!</h1>
                    <p>We have the best ones available for you. No need to ask around, we have them all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6" id="product_1">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/1.webp" alt="LENCO">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lenco TCD-2500</h3>
                                    <p>Price: 1750 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    { 
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(1))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" >Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_2">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/2.webp" alt="KTOOLS">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>KTools K216</h3>
                                    <p>Price: 950 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    {  
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(2))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_3">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/3.webp" alt="BLOOD">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bood Çantalı Pikap</h3>
                                    <p>Price: 400 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    { 
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(3))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_4">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/4.webp" alt="LENCO">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lenco LS-300WD</h3>
                                    <p>Price:  1900 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    { 
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(4))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6" id="product_5">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/5.webp" alt="KTOOLS">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>KTools Nostalgie K344 Pikap</h3>
                                    <p>Price: 450 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    {  
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(5))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/6.webp" alt="PIRANHA">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Piranha 7315</h3>
                                    <p>Price: 350 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    {  
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(6))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_7">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/7.webp" alt="MIKADO">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mikado MN-101</h3>
                                    <p>Price: 500 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    {  
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(7))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_8">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/8.webp" alt="URBAN">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Urban Sound</h3>
                                    <p>Price: 470 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    {  
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(8))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom:5%;" id="product_9">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/9.webp" alt="GDL">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Gdl Retro T500</h3>
                                    <p>Price: 600 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    { 
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(9))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_10">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/10.webp" alt="GDL">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Gdl Retro T31BU</h3>
                                    <p>Price: 550 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    {  
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(10))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_11">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/11.webp" alt="RECORD">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Record Master RMJ-209C</h3>
                                    <p>Price: 2250 &#8378</p>
                                    <?php if(!isset($_SESSION['email']))
                                    {  
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else
                                        {
                                            if(check_if_added_to_cart(11))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" id="product_12">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/12.webp" alt="ION">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ion Mustang Lp</h3>
                                    <p>Price: 2400 &#8378</p>
                                    <?php if(!isset($_SESSION['email'])) // If not logged in //
                                    { 
                                        ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12))
                                            {
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }
                                            else
                                            {
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
           <?php require 'footer.php'; ?>
        </div>
    </body>
</html>
