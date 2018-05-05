<?php 
	$con = mysqli_connect('localhost','root','','newcrud');
	$con->query("insert into results(name,roll,reg,gpa) values
		('karim',1234,34578,5.00),
		('parbhez',4563,34455,4.44),
		('shohag',1285,34215,4.25),
		('saiful',9876,34895,5.00),
		('pavel',4567,34455,4.00),
		('sumi',3421,34765,54.00)



		");



?>