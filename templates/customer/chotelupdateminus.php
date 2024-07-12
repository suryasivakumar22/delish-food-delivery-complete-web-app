<?php
session_start();
$master2 = mysqli_connect('localhost', 'root','rootpw', $_SESSION['numberl'].'b');
$theblaster = 'SELECT priceperproduct from cart where id ="'.$_POST['tikk'].'"';
$rmko = mysqli_query($master2, $theblaster);
$fa9945 = mysqli_fetch_all($rmko,MYSQLI_ASSOC);
$sql2 = 'UPDATE cart set qnty = '.$_POST['qty12'].',priceXqnty ='.$fa9945[0]['priceperproduct']*$_POST['qty12'].' where id = "'.$_POST['tikk'].'"';
mysqli_query($master2, $sql2);
?>