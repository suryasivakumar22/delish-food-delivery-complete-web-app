<?php 

session_start();
if(session_unset()){
	header('location: hlogin.php');
}



 ?>