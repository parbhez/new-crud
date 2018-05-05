<?php
session_start();
if (isset($_SESSION['user_id'])) {
	header('location: /');
}

$message = "";
	if (
		isset($_POST['email']) &&
		isset($_POST['password'])
		) 
	{
		$email = $_POST['email']; 		
		$password = $_POST['password'] 	;
		$con = new PDO('mysql:host=localhost;dbname=loginreg','root','');
		$statement = $con->prepare('select * from loginreg where email=:email');
		$statement->execute([
			':email' => $email
			]);

		$user = $statement->fetch(PDO::FETCH_OBJ);

		if (!$user) {
			$message = "Your email not found in database.";
		} else {
			if (password_verify($password, $user->password)) {
				$_SESSION['user_id'] = $user->id;
				header('location: /');
			} else {
				$message = "Your password incorrect."; 
			}
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2>Login Here</h2>
			</div>
			<div class="card-body">
			<?php if(!empty($message)):?>
				<div class="alert alert-danger">
					<?= $message;?>
				</div>
			<?php endif;?>
				<form action="" method="post">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" required>
					</div>
					<div class="form-group">
						<p>You don't register yet?<a href="reg.php"> Registration Here</a></p>
					</div>
					<div class="form-group">
						<button class="btn btn-outline-primary" class="submit">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>