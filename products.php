<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products/E-cart</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php
            include 'products_navigation.php';
            include 'check_if_added.php';
            
        ?>
       
        <div class="container panel-margin">
            <div class="jumbotron">
                <h1>Welcome to our Lifestore Store.</h1>
                <p>We have the best products for you.No need to hunt around,we have all in one place.</p>
            </div>
            
            <div class="row text-centre">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="camera">
                        <div class="caption">
                            <h3>camera 1</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 80,000</p>                           
                            <?php if(check_if_added_to_cart(1)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="camera">
                        <div class="caption">
                            <h3>camera 2</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 80,000</p>                           
                             <?php if(check_if_added_to_cart(2)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                              
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="camera">
                        <div class="caption">
                            <h3>camera 3</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 80,000</p>                           
                            <?php if(check_if_added_to_cart(3)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="camera">
                        <div class="caption">
                            <h3>camera 4</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 80,000</p>                           
                            <?php if(check_if_added_to_cart(4)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                           
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row text-centre">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt1.jpg" alt="camera">
                        <div class="caption">
                            <h3>shirt 1</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 700</p>                           
                             <?php if(check_if_added_to_cart(5)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                             
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt2.jpg" alt="camera">
                        <div class="caption">
                            <h3>shirt 2</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 700</p>                           
                             <?php if(check_if_added_to_cart(6)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                             
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt3.jpg" alt="camera">
                        <div class="caption">
                            <h3>shirt 3</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 800</p>                           
                            <?php if(check_if_added_to_cart(7)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt4.jpg" alt="camera">
                        <div class="caption">
                            <h3>shirt 4</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 800</p>                           
                            <?php if(check_if_added_to_cart(8)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                           
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row text-centre">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch1.jpg" alt="camera">
                        <div class="caption">
                            <h3>watch 1</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 1000</p>                           
                            <?php if(check_if_added_to_cart(9)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                           
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch2.jpg" alt="camera">
                        <div class="caption">
                            <h3>watch 2</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 1000</p>                           
                            <?php if(check_if_added_to_cart(10)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                          
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch3.jpg" alt="camera">
                        <div class="caption">
                            <h3>watch 3</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 1000</p>                           
                            <?php if(check_if_added_to_cart(11)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                          
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch4.jpg" alt="camera">
                        <div class="caption">
                            <h3>watch 4</h3>
                            <p>Price:<i class="fa fa-rupee"></i> 1000</p>                           
                            <?php if(check_if_added_to_cart(12)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                            <?php } ?>                           
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

