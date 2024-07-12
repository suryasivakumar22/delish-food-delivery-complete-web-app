<?php 

session_start();
if(session_unset()){
	header('location: home1.php');
}



 ?>