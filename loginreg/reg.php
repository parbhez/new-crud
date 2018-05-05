<?php
session_start();
if (isset($_SESSION['user_id'])) {
	header('location: /');
}
$message = "";
	if (
		isset($_POST['name']) &&
		isset($_POST['email']) &&
		isset($_POST['password'])
		) {
		$name = $_POST['name'];		
		$email = $_POST['email'];		
		$password = password_hash($_POST['password'],PASSWORD_BCRYPT);	

		$con = new PDO('mysql:host=localhost;dbname=loginreg','root','');
		$statement = $con->prepare('insert into loginreg(name,email,password) values(:name,:email,:password)');
		$status = $statement->execute([
			':name' => $name,
			':email' => $email,
			':password' => $password
			]);

			if ($status) {
					$message = "Your data inserted successfully.";
				} else{
					$message = "Something went wrong.";
				}	
	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2>Registration Here</h2>
			</div>
			<div class="card-body">
			<?php if(!empty($message)): ?>
				<div class="alert alert-success">
					<?php echo $message;?>
				</div>
			<?php endif;?>
				<form action="" method="post">

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control" required>
					</div>
					<div class="form-group">
						<p>You have already account ??? <a href="login.php"> Login</a></p>
					</div>
					<div class="form-group">
						<button class="btn btn-outline-info" class="submti">Register Here</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>