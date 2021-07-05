<?php require  'header.php'; ?>            
<div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                        <h1><b>SIGN UP</b></h1>
                        <form method="post" action="user_registration_script.php" onsubmit="return checkPostCode()" >
                            <div>
                                <p id="postcode">Postcode:  </p>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            </div> 
                            <div class="form-group">
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password(min. 8 characters)" pattern="(.*[a-zA-Z]){1,})(?=(.*[0-9]){2,}).{8}$" required>
                            </div>
                             <div class="form-group">
                                <input id="post_code_confirm" class="form-control" name="confirm_postcode" placeholder="Enter PostCode" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Sign Up Now">
                            </div>
                        </form>
                    </div>
                </div>
</div>
<script>
                function randomNumber(min, max) 
                { 
                    min = Math.ceil(min);
                    max = Math.floor(max);
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                } 
                    var min = 01;
                    var max = 81;
                    
                    var rng = randomNumber(min,max);
                    var middle = randomNumber(10,99);
                    var last = randomNumber(0,100);
                    
                    if(last > 50)
                    {
                        last = 5;
                    }
                    else
                    {
                        last = 0;
                    }
                    
                    if(rng < 10)
                    {
                        
                        rng = "0" + rng;
                    }
                    
                    var postcode = rng.toString() + middle.toString() + last.toString();
                    
                    document.getElementById("postcode").innerHTML += postcode;  
               
                
                function checkPostCode()
                {
                   var post_code1 = document.getElementById("post_code_confirm").value.toString();
                   var post_code = postcode.toString();
                   
                   if(post_code1 === post_code)
                   {
                       window.alert("Accepted");
                       return true;
                   }
                   else
                   {
                       window.alert("PostCodes Does not match. Try again");
                       return false;
                   }
                }
</script>
<?php require 'footer.php'; ?>  