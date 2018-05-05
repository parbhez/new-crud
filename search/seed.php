<?php
	//$con = new PDO('mysql:host=loaclhost;dbname=blog','root','');
	$con = new PDO('mysql:dbname=blog;host=localhost','root','');
	$statement = $con->prepare("
		insert into tbl_blog(name,email)
		 values('sumon','sumon@gmail.com'),
		 ('karim','karim@gmail.com'),
		 ('shohan','shohan@gmail.com'),
		 ('parbhez','parbhezgmail.com'),
		 ('saiful','saiful@gmail.com'),
		 ('alim','alim@gmail.com')

		");

		$statement->execute();
?>