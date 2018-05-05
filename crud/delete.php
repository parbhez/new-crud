<?php
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','','newcrud');
$data = $con->query("delete from results where id = $id");
//print_r($data);
header("location: /");

?>