 <?php
	$con = mysqli_connect('localhost','root','','newcrud');
	$result = $con->query("select * from results order by id desc");
	
	// while ($results = $result->fetch_object()) {

	// 	print_r($results);
	// }

	if (isset($_GET['q'])) {
		//echo "search complete";
		$q = $_GET['q'];
		$pp = $con->query("select * from results");
		print_r($pp);

	}

?>
 


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">
	<div class="bg-info p-3 text-white">
		<h2>All Result</h2>
		<a href="form.php" class="btn btn-primary">Add Student</a>
	</div>

		<div class="row">
				<div class="col-md-6 mx-auto">
					<form class="my-4">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="search.....">
					<div class="'input-group-append">
						<button type="submit" class="btn btn-outline-primary">Search</button>
					</div>
				</div>
			</form>
				</div>
			</div>	
	
		<table class="table table-borderd">
			<tr>
				<th width="10%">SL No</th>
				<th width="20%">Name</th>
				<th width="20%">Roll No</th>
				<th width="20%">Reg No</th>
				<th width="10%">GPA</th>
				<th width="20%">Action</th>
			</tr>
			<?php if($result):?>
				<?php $i = 0;?>
			<?php while($results = $result->fetch_object()):?>
				<?php $i++;?>
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $results->name;?></td>
					<td><?php echo $results->roll;?></td>
					<td><?php echo $results->reg;?></td>
					<td><?php echo $results->gpa;?></td>
					<td>
						<a href="edit.php?id=<?php echo $results->id;?>" class="btn btn-info">Edit</a> || 
						<a onclick="return confirm('Are you sure want to delete now????')" href="delete.php?id=<?= $results->id;?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php endwhile;?>
				<?php endif;?>
		</table>
		</div>
</body>
</html>