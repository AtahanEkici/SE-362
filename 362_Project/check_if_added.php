<?php  
    function check_if_added_to_cart($item_id)
    { 
        require 'connection.php'; // make sure variable $con is initialized //
        
        $user_id=$_SESSION['id'];
        $product_check_query="SELECT * FROM users_items WHERE item_id='$item_id' and user_id='$user_id' AND status='Added to cart'";
        $product_check_result=mysqli_query($con,$product_check_query) or die(mysqli_error($con));
        $num_rows=mysqli_num_rows($product_check_result);
        
        if($num_rows >= 1)
        {
            return 1;
        }
        else
        {
           return 0; 
        } 
    }
?>