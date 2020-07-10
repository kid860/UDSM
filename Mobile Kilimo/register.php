<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Kilimo</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="section">

		<div style="position:absolute; left:10%; top: 30%; color: white;">
			<h1>Mobile Kilimo</h1>
			<h3>"Connecting Farmers to markets.</h3>
		</div>
		
		<form method="post" action="register.php">
			<div class="header">
				<h2>Register</h2>
			</div>

			<?php include('errors.php'); ?>

			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" class="btn btn-primary" name="reg_user">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	
	<script>
		$(document).ready(function(){
			var images = ["assets/green1.jpg", "assets/green2.jpg", "assets/green3.jpg"];
			var count = 1;
			var section = $('body');

			function init(){
				section.css("background-image", "url(" + images[count] + ")");
				count++;

					if(count>2){
					count=0;
				}

			}

			setInterval(()=>{init()}, 4000);
		});
	</script>
</body>
</html>