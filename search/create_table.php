<?php
	$con = new PDO('mysql:dbname=blog;host=localhost','root','');

	$con->query("
		create table tbl_blog (
			id int(11) auto_increment primary key,
			name varchar(30) not null,
			email varchar(40) not null

		)
		");

?>