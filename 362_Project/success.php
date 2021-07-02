<?php
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
    
    require 'connection.php';
    
    if(!isset($_SESSION['email']))
    {
        header('location:index.php');
    }
    else
    {
        $user_id = $_GET['id'];
        $confirm_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id='$user_id'"; // set the status of the items that user has to confirmed so that the cart will appear empty next time they try to access it but a record of their purchases are kept in database //
        $confirm_query_result = mysqli_query($con,$confirm_query) or die(mysqli_error($con));    
    }
?>
        <div>
            <?php require 'header.php'; ?>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading"></div>
                            <div class="panel-body">
                                <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php require 'footer.php'; ?>
        </div>
    </body>
</html>
