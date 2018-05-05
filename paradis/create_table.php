<?php
	$connect = mysqli_connect('localhost','root','','star_paradis');
	$connect->query("
		create table switch_cocket(
			id serial,
			name varchar(37),
			quanty int(11),
			price int(11)


		)

		");



?>