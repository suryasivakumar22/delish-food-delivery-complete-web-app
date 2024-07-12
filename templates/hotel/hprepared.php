<?php
session_start();
$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
$outkio = "UPDATE rliveorders set status = 'prepared' where ordernumber = ".$_POST["id"];
mysqli_query($conn,$outkio);
$kohila = "SELECT contact from rliveorders where ordernumber =".$_POST["id"];
$jkio = mysqli_query($conn,$kohila);
$myo = mysqli_fetch_all($jkio,MYSQLI_ASSOC);
$hekya = $myo[0]['contact'];
$conn1 = mysqli_connect('localhost','root','rootpw',$hekya);
$ogok = "UPDATE checkout set status = 'prepared' where ordernumber = ".$_POST["id"];
mysqli_query($conn1,$ogok);
?>