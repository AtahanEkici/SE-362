<?php
    require 'connection.php';
    
    if (session_status() == PHP_SESSION_NONE  || session_id() == '') // Check if a session is started before if not start session //
    {
        session_start();
    }
    
    if(isset($_SESSION['email']))
    {
        header('location: products.php');
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
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php" onsubmit="return checkpasswords()">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            </div> 
                            <div class="form-group">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}" required>
                            </div>
                             <div class="form-group">
                                <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Password(min. 6 characters)" pattern=".{6,}" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script> 
                function checkpasswords() // check if the passwords match with each other if they match proceed if they don't display error and continue //
                {
                   var pass1 = document.getElementById("password").value;
                   var pass2 = document.getElementById("confirm_password").value;
                   
                   if(pass1 === pass2)
                   {
                       return true;
                   }
                   else
                   {
                       window.alert("Passwords should match each other.");
                       return false;
                   }
                }
            </script>
            <br><br><br><br><br><br>
           <?php require 'footer.php'; ?>
        </div>
    </body>
</html>
