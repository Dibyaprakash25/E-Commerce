<!DOCTYPE html>
<html>
    <head>        
        <title>My E-cart</title>
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
            include 'navigation.php';
        ?>
        <div id="banner-image">
            <div class="container">
                <div id="banner_content">
                    <h1>We sell lifestyle</h1>
                    <p>Flat 40% OFF</p>
                    <a href="login.php">
                    <button class="btn btn-danger btn-lg active">Shop Now</button>
                    </a>
                </div>
            </div>
        </div>       
        <?php
            include 'footer.php';
        ?>                
    </body>
</html>
