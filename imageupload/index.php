<?php
if (isset($_FILES['image'])) {
	$file = $_FILES['image'];
	$name = time().md5('masud').rand(2000, 40000).$file['name'];
	$tmp_name = $file['tmp_name'];
	// print_r($tmp_name);
	// die();
	$name = move_uploaded_file($tmp_name, "uploads/$name");
	
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Image Upload</label>
			<input type="file" name="image" class="form-control">
			</div>
			<div class="form-group">
			<button class="btn btn-primary" type="submit">Image Uplaod</button>
			</div>
		</form>
</body>
</html>