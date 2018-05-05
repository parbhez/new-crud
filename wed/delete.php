<?php 

$id = $_GET['id'];
$con = mysqli_connect('localhost','root', '', 'shop');
$con->query("delete from products where id = $id");

header('location: /');