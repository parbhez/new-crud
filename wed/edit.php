<?php 

$id = $_GET['id'];
$con = mysqli_connect('localhost', 'root', '', 'shop');
$products = $con->query("select * from products where id = $id");
$product = $products->fetch_object();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$title = $_POST['title'];
	$price = $_POST['price'];
	$con->query("update products set title='$title', price='$price' where id=$id ");
	header('location: /');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="bg-info text-white p-5">
		<h2>Edit <?php echo $product->title ?></h2>
	</div>

	<form method="post" class="mt-3">
		<div class="form-group">
			<label for="title">Title</label>
			<input value="<?php echo $product->title ?>" type="text" name="title" id="title" class="form-control">
		</div>
		<div class="form-group">
			<label for="price">price</label>
			<input value="<?php echo $product->price ?>" type="text" name="price" id="price" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-outline-primary" type="submit">update product</button>
		</div>
	</form>
</div>

</body>
</html>