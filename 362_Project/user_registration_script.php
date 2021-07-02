<?php
    require 'connection.php';
    
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }

    $email = mysqli_real_escape_string($con,$_POST['email']);
    
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    
    if(!preg_match($regex_email,$email))
    {
        echo('<script> window.alert("Incorrect email.") <script>  ');
        header("refresh:1; url=signup.php"); 
        exit();
    }
    
    $password = md5(md5(mysqli_real_escape_string($con,$_POST['password']))); //if the first md5 has been known by various sites then the second md5 of the first md5 is offer some protection against account hyjackers i think //
    
    if(strlen($password) < 6)
    {
        echo('<script> window.alert("Password should have at least 6 characters.") <script>');
        header("refresh:1; url=signup.php"); 
        exit();
    }
    
    $duplicate_user_query = "SELECT id FROM users WHERE email='$email'";
    $duplicate_user_result = mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched = mysqli_num_rows($duplicate_user_result);
    
    if($rows_fetched > 0) // If dublicate entry found //
    {
        echo('<script> window.alert("Email already exists in our database! Please Log in instead")<script> ');
        header("refresh:1; url=login.php"); 
        exit();
    }
    else // If nothing else appears to be a problem proceed to add the user to the database //
    {
        $user_registration_query = "INSERT INTO users(email,password) VALUES ('$email','$password')";
        $user_registration_result = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        $_SESSION['email'] = $email;
        $_SESSION['id'] = mysqli_insert_id($con); 
        
        echo('<script> window.alert("User successfully registered") <script> ');
        header("refresh:2; url=products.php"); 
        exit();
    }
?>