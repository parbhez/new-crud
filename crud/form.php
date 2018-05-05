<?php
	// echo "get";
	// print_r($_GET);
	// echo "post";
	// print_r($_POST);
	// echo "request";
	// print_r($_REQUEST);
	// print_r($_SERVER);
$message = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	//echo "form submit";
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$gpa = $_POST['gpa'];
	if ($name == "" || $roll == "" || $reg == "" || $gpa == "") {
		$message = 'Field must not be empty!!!';
	} else {
	$con = mysqli_connect('localhost','root','','newcrud');
	$insert = $con->query("insert into results(name,roll,reg,gpa) values('$name','$roll','$reg',$gpa)");

	if ($insert) {
		$message = "Data inserted successfully";
	} else {
		$message = "Data not inserted";

	}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">
		<div class="bg-info p-3 text-white">
			<h2>Add Student</h2>
			<a href="index.php" class="btn btn-secondary">Home Page</a>
		</div>
		<?php if(!empty($message)):?>
			<div class="alert alert-success">
				<?php echo $message;?>
			</div>
		<?php endif;?>
		<form action="" method="POST">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control" >
			</div>

			<div class="form-group">
				<label for="roll">Roll</label>
				<input type="number" name="roll" id="roll" class="form-control" >
			</div>

			<div class="form-group">
				<label for="reg">Reg</label>
				<input type="number" name="reg" id="reg" class="form-control" >
			</div>

			<div class="form-group">
				<label for="gpa">GPA</label>
				<input type="text" name="gpa" id="gpa" class="form-control" >
			</div>

			<div class="form-group">
				<button class="btn btn-outline-primary" type="submit">Add Student</button>
			</div>
		</form>
	</div>
</body>
</html>