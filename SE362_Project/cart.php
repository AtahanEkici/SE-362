<?php
    require 'connection.php';

    if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
    
    if(!isset($_SESSION['email'])) // if the user is not logged in then proceed to the login page //
    {
        header('location: login.php');
    }
    
    $user_id=$_SESSION['id'];
    $user_products_query = "SELECT it.id,it.name,it.price FROM users_items ut inner join items it on it.id = ut.item_id WHERE ut.user_id='$user_id' && status <> 'confirmed'";
    $user_products_result = mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products = mysqli_num_rows($user_products_result);
    $sum = 0;
    
    if($no_of_user_products == 0)
    {
       echo '<script>alert("No item(s) found on cart")</script>'; // Alerting window that informs the user their cart is empty //
    ?>
    <?php
    }
    else
    {
        while($row = mysqli_fetch_array($user_products_result)) // calculate total price of the cart //
        {
            $sum += $row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/main_icon.webp"/>
        <title>Nostalji Plak</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php 
               require 'header.php';
            ?>
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result = mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products = mysqli_num_rows($user_products_result);
                        $counter = 1;
                       while($row = mysqli_fetch_array($user_products_result))
                       { 
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter++;}?>
                        <tr>
                            <th></th><th>Total</th><th><?php echo $sum;?>&#8378</th><th>
                                <?php
                                if($no_of_user_products == 0)
                                {
                                    ?>
                                <p>No items found</p>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a>
                                    <?php
                                }
                                ?>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
           <?php require 'footer.php'; ?>
        </div>
    </body>
</html>
