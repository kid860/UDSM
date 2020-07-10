<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Mobile Kilimo-Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h6>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h6>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<header>
				<div class="navbar navbar-dark bg-dark shadow-sm">
					<div class="container d-flex justify-content-between">
					<a href="#" class="navbar-brand d-flex align-items-center">
						<strong>Mobile Kilimo</strong>
					</a>
					<a href="index.php?logout='1'" style="color: red;">Logout</a>
				</div>
				</header>

				<main role="main">

				<center>
					<div>
						<img height="200" style=" padding: 30px; border-radiuas:100px;" src="assets/timmy.png">
						<strong><?php echo $_SESSION['username']; ?></strong>
					<div>
				</center>
				
				</main>
		<?php endif ?>
	</div>

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
		
</body>
</html>