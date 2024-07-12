<?php
session_start();
$gmap = $_POST['gloc'];
$conn55 = mysqli_connect('localhost','root','rootpw','9150219902b');
$queryad="INSERT into checkout values(1,'null','null','null')";
mysqli_query($conn55,$queryad);
?>