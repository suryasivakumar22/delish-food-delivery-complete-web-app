<?php
session_start();
	$delt = $_POST['menucat'];
	$query = "DELETE FROM ".$_SESSION['catna']." where id = '".$delt."'";
	$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
	#$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
	mysqli_query($conn, $query);
?>