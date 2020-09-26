
<!DOCTYPE html>
<html>
    <head>
        <title>Register/E-cart</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="index.css">
        <style>
            .top_margin{
                margin-top:20px;
            }
        </style>       
    </head>
    <body>
        <div class="container">
            <div class="row top_margin">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">User Registration</div>
                        
                        <div class="panel-body">
                            <form method="POST" action="signup_submit.php">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="cnfpassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="cnfpassword" name="cnfpassword">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control" id="phone" pattern="[789][0-9]{9}$" name="phone">
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" name="city">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                            </form>
                            
                            <script>
                                document.querySelector('.btn').onclick=function(){
                                    var password=document.querySelector('#password').value,
                                            confirmpassword=document.querySelector('#cnfpassword').value;
                                    
                                    if(password==""){
                                        alert("Field Cannot be empty");
                                        return false;
                                    }
                                    else if(password!=confirmpassword){
                                        alert("Password and Confirmpassword didn't match ");
                                        return false;
                                    }
                                    else if(password==confirmpassword){
                                        return true;
                                    }
                                }
                            </script>                                                         
                        </div>                            
                        </div>                                                   
                    </div>                   
                </div>                
            </div>                          
        <?php
            include 'footer.php';
        ?>        
    </body>       
  
</html>
