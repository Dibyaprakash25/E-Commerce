
<?php
    require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login to LifeStyle Stores</title>
        <!-- link to Bootstrap minified css-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- link to Jquery minified-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- link to Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- link to external CSS -->
        <link rel="stylesheet" type="text/css" href="index.css">
        <style>
            .top_margin{
                margin-top: 20px;
            }
        </style>
    </head>
	<body>
            <?php
               include 'navigation.php';
            ?>
            <div class="container panel-margin">
		<div class="panel panel-primary">
                    <div class="panel-heading">
			<h3 class="panel-title">Login to make purchase</h3>
                    </div>
                    <div class="panel-body">
                            <form action="login_submit.php" method="post">
				<div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
				</div>
				<div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
                            </form>
                    </div>
                    <div class="panel-footer">
			Don't have an account?Click <a href="signup.php">here</a> to create one.
                    </div>
		</div>
            </div>
		<?php
                    include 'footer.php';
		?>
	</body>
</html>



