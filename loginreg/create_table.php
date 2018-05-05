<?php
	$con = new PDO('mysql:host=localhost;dbname=loginreg','root','');
	$statement = $con->prepare('
		create table loginreg(
			id int(11) auto_increment primary key,
			name varchar(255),
			email varchar(233),
			password varchar(255)
		)
		');
	$statement->execute();
?>