<?php 
	$con = mysqli_connect('localhost','root','','newcrud');
	$con->query("
		create table results(
		id serial,
		name varchar(255),
		roll int(11),
		reg int(11),
		gpa varchar(255)


		)


		");



?>