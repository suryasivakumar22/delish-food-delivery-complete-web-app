<?php 
session_start();
$conn235 = mysqli_connect('localhost','root','rootpw',$_SESSION['numberl'].'b');
$olo = "SELECT mname,price from ".$_POST['oppk']." where id= ".$_POST['ov'] ;
$conn2235 = mysqli_connect('localhost','root','rootpw',$_SESSION['het'].'a');
$rmko = mysqli_query($conn2235, $olo);
$fa9945 = mysqli_fetch_all($rmko,MYSQLI_ASSOC);
$qlo = "INSERT INTO cart VALUES('".$_POST['enna']."','".$_POST['rko']."','".$fa9945[0]['mname']."','".$_POST['oppk']."',".$fa9945[0]['price'].",".$_POST['qty'].",".$fa9945[0]['price']*$_POST['qty'].")";
mysqli_query($conn235, $qlo);

?>