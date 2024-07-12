<?php
session_start();

$delt = $_POST['categoryid'];

$query = "DELETE FROM mycategories where categories = '".$delt."'";
$query1 = "DROP table ".$delt;
$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
#$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
rmdir("../../uploadedfiles/9999999999a/thumbnails/menuthumb/".$delt);
mysqli_query($conn, $query);
mysqli_query($conn, $query1);
echo "Category deleted";

?>