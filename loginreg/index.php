<?php
session_start();
	if (!isset($_SESSION['user_id'])) {
		header('location: login.php');	
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2>Home page <a href="logout.php" class="btn">Logout</a></h2>
			</div>
			<div class="card-body">
				<p>This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.</p>
				<p>This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.This is home page.</p>
			</div>
		</div>
	</div>
</body>
</html>