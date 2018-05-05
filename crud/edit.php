<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','newcrud');
$data = $con->query("select * from results where id = $id");
//print_r($data);
$queryData = $data->fetch_object();
//print_r($queryData);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//echo "form submit";
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$reg = $_POST['reg'];
	$gpa = $_POST['gpa'];
	$con->query("
		update results
		set
		name = '$name',
		roll = '$roll',
		reg = '$reg',
		gpa = '$gpa'
		where id = $id
		");
	header("location: /");
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
			<h2>Update Student</h2>
			<a href="index.php" class="btn btn-secondary">Home Page</a>
		</div>
		
		<form action="" method="POST">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" value="<?php echo $queryData->name;?>" name="name" id="name" class="form-control" >
			</div>

			<div class="form-group">
				<label for="roll">Roll</label>
				<input type="number" value="<?php echo $queryData->roll;?>" name="roll" id="roll" class="form-control" >
			</div>

			<div class="form-group">
				<label for="reg">Reg</label>
				<input type="number" value="<?php echo $queryData->reg;?>" name="reg" id="reg" class="form-control" >
			</div>

			<div class="form-group">
				<label for="gpa">GPA</label>
				<input type="text" value="<?php echo $queryData->gpa;?>" name="gpa" id="gpa" class="form-control" >
			</div>

			<div class="form-group">
				<button class="btn btn-outline-primary" type="submit">Update Student</button>
			</div>
		</form>
	</div>
</body>
</html>