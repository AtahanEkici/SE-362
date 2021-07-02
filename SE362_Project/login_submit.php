<?php
    require 'connection.php';
    
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
    
    $email=mysqli_real_escape_string($con,$_POST['email']);
    
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    
    if(!preg_match($regex_email,$email))
    {
        echo(' </script> alert("Email Error. Redirecting to the login page..."") </script> ');
        header("refresh:2; url=login.php");
        die();
    }
    
    $password = md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
    
    if(strlen($password) < 6)
    {
        echo('<script> alert("Password should have atleast 6 characters. Redirecting you back to login page") </script> ');
        header("refresh:2; url=login.php");
        exit();
    }
    
    $user_authentication_query = "SELECT id,email FROM users WHERE email='$email' AND password='$password'";
    $user_authentication_result = mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched = mysqli_num_rows($user_authentication_result);
    
    if($rows_fetched == 0)
    {
        echo ('<script> alert("Wrong username or password please try again") </script>');
        header("refresh:1; url=login.php");
        die();
    }
    else
    {
        $row = mysqli_fetch_array($user_authentication_result);
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $row['id'];
        header('Location: products.php');
    }
 ?>