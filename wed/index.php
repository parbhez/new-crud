<?php 
$con = mysqli_connect('localhost', 'root', '', 'shop');
$products = $con->query('select * from products order by id desc');


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="bg-info p-5 text-white">
			<h2>All products</h2>
			<a href="edit.php" class="	btn btn-warning">Add products</a>
		</div>
		<table class="table table-bordered">
			<tr>
				<th>Title</th>
				<th>price</th>
				<th>action</th>
			</tr>

			<?php while($product = $products->fetch_object()): ?>
				<tr>
					<td><?php echo $product->title ?></td>
					<td><?php echo $product->price ?></td>
					<td>
						<a class="btn btn-primary" href="edit.php?id=<?php echo $product->id ?>">edit</a>
						<a class="btn btn-danger" href="delete.php?id=<?php echo $product->id ?>">delete</a>
					</td>
				</tr>
			<?php endwhile; ?>

		</table>
	</div>
	
</body>
</html>