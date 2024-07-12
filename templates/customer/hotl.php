<?php
session_start();
$master1 = mysqli_connect('localhost', 'root','rootpw', $_SESSION['numberl'].'b');
$sql5 = 'DELETE FROM cart where id ="'.$_POST['tio'].'"';
mysqli_query($master1, $sql5);
?>