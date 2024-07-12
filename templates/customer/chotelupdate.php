<?php
session_start();
$master = mysqli_connect('localhost', 'root','rootpw', $_SESSION['numberl'].'b');
$theblaster = 'SELECT priceperproduct from cart where id ="'.$_POST['tok'].'"';
$rmko = mysqli_query($master, $theblaster);
$fa9945 = mysqli_fetch_all($rmko,MYSQLI_ASSOC);
$sql = 'UPDATE cart set qnty = '.$_POST['qty1'].',priceXqnty ='.$fa9945[0]['priceperproduct']*$_POST['qty1'].' where id = "'.$_POST['tok'].'"';
mysqli_query($master, $sql);
?>