
<?php
    include 'common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library-->
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
    <title>Ecart/success</title>
</head>
<body>   
    
    <?php
        include 'products_navigation.php';        
        include 'confirm.php';
    ?>
    
    </br></br>
        <div class="content">
          <div class="container">
              <div class="col-xs-12">
              <div class="jumbotron">
                <h3 class="text-center">Thank You for Ordering from Ecart!</h3>
                <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                <hr>
                <h5 class="text-center">To Continue Shopping , Click <a href="products.php">here</a></h5>
              </div>
            </div>
          </div>
        </div>
    
    <?php
        include 'footer.php';
    ?>  
</body>
</html>
    
        

