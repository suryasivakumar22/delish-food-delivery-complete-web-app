<?php 
	session_start();
			$conn1 = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
	if (isset($_POST['update'])) {
		$categorynam = $_SESSION['catna'];
		#$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab']);
		$mn = $_POST['mname'];
		$st = $_POST['startime'];
		$et = $_POST['endtime'];
		$price = $_POST['price'];
		#$query7 = 'SELECT id from '.$_SESSION['catna'].' WHERE maname = '.$;
		#$m1 = mysqli_query($conn1, $query7);
		#$envv = mysqli_fetch_all($m1,MYSQLI_ASSOC);
		$dir = "../../uploadedfiles/".$_SESSION['hdatab']."a/thumbnails/menuthumb/".$categorynam.'/';
		$tdir = $dir.basename($_FILES['img']['name']);
		if(move_uploaded_file($_FILES['img']['tmp_name'],$tdir)){
			$query = "UPDATE ".$categorynam." SET mname = '".$mn."', starttime ='".$st."',endtime ='".$et."',price =".$price.",imagename = '".$_FILES['img']['name']."',stock ='".$_POST['stk']."',cat = '".$_POST['rtk']."' WHERE id =".$_SESSION['edut'] ;
			if(mysqli_query($conn1, $query)){
				header('location: hmenu.php');
		}
	}
}

?>