<?php
		$connect = mysqli_connect('localhost','root','','shop');
		$product = $connect->query('select * from products');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Php</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="card">
			<div class="card-header">
				<h2>All products</h2>
			</div>
			<table class="table table-bordered">
				<tr>
					<th>Title</th>
					<th>price</th>
				</tr>
	
					<?php while($result = $product->fetch_object()) :?>
						<tr>
						<td><?php echo $result->title;?></td>
						<td><?php echo $result->price;?></td>
						</tr>
					<?php endwhile;?> 
				
			</table>
		</div>
	</div>
</body>
</html>