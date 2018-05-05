<?php
$message = "";
if (isset($_FILES['image'])) {
	$file = $_FILES['image'];
	$name = time().md5("hello").$file['name']; //mark.jpg
	if(!file_exists("uploads")){
		mkdir("uploads");
	}
	$destination = 'uploads/'.$name;
	$exploded_image = explode(".", $name); //['mark','jpg']
	$exploded = end($exploded_image);//jpg
	$images_extensions = ['jpg','png','jpeg','gif'];

	$tmp_name = $file['tmp_name'];
	if(in_array($exploded, $images_extensions)){
		move_uploaded_file($tmp_name, $destination);
		$message = "image uploaded Successfully";
	} else{
		$message = "you can only uploaded image";
	}
	
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<h2>Image Upload</h2>
		<?php if(!empty($message)):?>
			<div class="alert alert-success">
				<?php echo $message;?>
			</div>
		<?php endif;?>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="file" name="image">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">image upload</button>
			</div>
		</form>
	</div>
</body>
</html>