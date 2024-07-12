<?php
session_start();
$categorynam = $_SESSION['catna'];
$conn1 = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
$mn = $_POST['mname'];
$st = $_POST['startime'];
$et = $_POST['endtime'];
$price = $_POST['price'];
#$dir = "../../uploadedfiles/9999999999a/thumbnails/menuthumb/".$categorynam.'/';
#$tdir = $dir.basename($_FILES['img']);
#if(move_uploaded_file($_FILES['img']['tmp_name'],$tdir)){
$categorynam = $_SESSION['catna'];
    if ( 0 < $_FILES['img']['error'] ) {
        echo 'Error: ' . $_FILES['img']['error'] . '<br>';
    }
    else {
       if (move_uploaded_file($_FILES['img']['tmp_name'], '../../uploadedfiles/'.$_SESSION['hdatab'].'a/thumbnails/menuthumb/'.$categorynam.'/'. $_FILES['img']['name'])) {
        	$query = "INSERT INTO $categorynam(mname,starttime,endtime,price,stock,cat,imagename) VALUES ('".$mn."','".$st."','".$et."',".$price.",'".$_POST['stk']."','".$_POST['rtk']."','".basename($_FILES['img']['name'])."')";
			#$conn1 = mysqli_connect('localhost','root','rootpw','9999999999a');
			mysqli_query($conn1, $query);
        } 
    }

#}
?>