<?php
session_start();
$categorynam = $_SESSION['catna'];
#$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab']);
$mn = $_POST['menuname'];
$st = $_POST['st'];
$et = $_POST['et'];
#$img = $_POST['img'];
$price = $_POST['price'];
#$dir = "../../uploadedfiles/9999999999a/thumbnails/menuthumb/".$categorynam.'/';
#if(move_uploaded_file($_POST['img'];, $dir)){
	$query = "INSERT INTO".$categorynam."(mname,starttime,endtime,price,imagename) VALUES('".$mn."','".$st."','".$et."','".$price.",null)";
    #$query ="INSERT INTO $categorynam(mname,starttime,endtime,price,imagename) VALUES ('1', 'rose milk', '17:01:00', '16:16:00', '20.5', null)";
	$conn1 = mysqli_connect('localhost','root','rootpw','9999999999a');
	mysqli_query($conn1, $query);
#}
?>