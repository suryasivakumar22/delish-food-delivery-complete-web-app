<?php

 session_start();
      if ($_SESSION['const'] === 'signup') {
    	echo $_SESSION['otp'];
	    if (isset($_POST['submit'])) {
	    	$sujeeth = 0 ; 
	    	$name = $_SESSION['name'];
		    $email= $_SESSION['email'];
		    $number = $_SESSION['number'];
		    $otp = $_SESSION['otp'];
		    $otp1 = $_POST['otp'];
		    if ($otp == $otp1 ) {
		    			    if ($_SESSION['otp'] == $_POST['otp']) {
					    			$n1 = $name;
					    			$n2 =  $email;
					    			$n3 = $number;
					    			$quer = "INSERT INTO signup(name,email,number) VALUES('".$n1."','".$n2."','".$n3."')";
						    		mysqli_query( $_SESSION['conn'],$quer);
						    		#create databse with number + b as name and one table for cart and checkout.
					    		}


		    			    }else{
		    	echo 'invalid otp';
		    }
				    }

    }elseif ($_SESSION['const'] === 'login') {
    	echo $_SESSION['otp1'];
	    if (isset($_POST['submit'])) {
		    $otp = $_SESSION['otp1'];
		    if ($otp === $_POST['otp']) {
	    		echo "success you're loggedin";
	    		header('location: ');
		    }else{
		    	echo 'invalid otp';
		    }
	    }
    }elseif ($_SESSION['const'] === 'hsignup') {
    	 if (isset($_POST['submit'])) {
	    	$cname = $_SESSION['cname'];
		    $hemail= $_SESSION['hemail'];
		    $hnumber = $_SESSION['hnumber'];
		    $otpp = $_SESSION['otpp'];
		    if ($otpp === $_POST['otp']) {
		    	$query7 = "INSERT INTO signup(name,email,number,approved) VALUES('$cname', '$hemail', '$hnumber','notapproved')";
	    		$conn1 = $_SESSION['conn1'];
	    		mysqli_query($conn, $query7);
	    		$query8 = "create database ".$hnumber .'a';
	    		mysqli_query($conn1, $query8);
	    		$query8 = "create table mycategories(id int AUTO_INCREMENT,categories varchar(255))";
	    		$conn2 = mysqli_connect('localhost', 'root','rootpw', $hnumber.'a')
	    		mysqli_query($conn2, $query8);
	    		#create live orders table 
	    		#create config table and insert dummy data
	    		mkdir('../../uploadedfiles'.$hnumber .'a');
	    		mkdir('../../uploadedfiles'.$hnumber .'a'.'/required');
	    		mkdir('../../uploadedfiles'.$hnumber .'a'.'/thumbnails');
	    		mkdir('../../uploadedfiles'.$hnumber .'a'.'/thumbnails/menuthumb');
	    		mkdir('../../uploadedfiles'.$hnumber .'a'.'/thumbnails/mainthumb');#for images in customer page
	    		$_SESSION['foldname'] = $hnumber . 'a';
	    		header('location: customer/hlogin.php');
		    }else{
		    	echo 'invalid otp';
		    }
    }elseif ($_SESSION['const1'] === 'hlogin') {
    	echo $_SESSION['otpp1'];
	    if (isset($_POST['submit'])) {
		    $otp = $_SESSION['otpp1'];
		    if ($otp === $_POST['otp']) {
	    		echo "success you're loggedin";
	    		if ($_SESSION['app'] === 'notsubmitted') {
	    	  		header('location: hotel/hfileupload.php');}
	    	  	elseif ($_SESSION['app'] === 'submitted') {
	    	  		header('location: hotel/hadmin.php ');}
	    	  	elseif ($_SESSION['app'] === 'approved') {
	    	  		header('location: hotel/hcategories.php');}
	    	  }	
	    	}
	    }
	    	  
	    		
		    else{
		    	echo 'invalid otp';
		    }
		}
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Otp</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href='logsignup/images/icons/favicon.ico' />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../logsignup/vendor/bootstrap/css/bootstrap.min.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= '../logsignup/fonts/font-awesome-4.7.0/css/font-awesome.min.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../logsignup/fonts/iconic/css/material-design-iconic-font.min.css'>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= '../logsignup/vendor/animate/animate.css' >
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href='../logsignup/vendor/css-hamburgers/hamburgers.min.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../logsignup/vendor/animsition/css/animsition.min.css'>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../logsignup/vendor/select2/select2.min.css'>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href='../logsignup/vendor/daterangepicker/daterangepicker.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../logsignup/css/util.css'>
	<link rel="stylesheet" type="text/css" href='../logsignup/css/main.css' >
<!--===============================================================================================-->
</head>
<body>

	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">

				<span class="login100-form-title p-b-37">
					otp 
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter otp">
					<input class="input100" type="password" name="otp" placeholder="Enter otp" maxlength="6" minlength="6" required>
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit" value="Submit">
						Verify
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
					</span>
				</div>

			</form>

			
		</div>
	</div>
	
	


<!--===============================================================================================-->
	<script src='../logsignup/vendor/jquery/jquery-3.2.1.min.js'></script>
<!--===============================================================================================-->
	<script src='../logsignup/vendor/animsition/js/animsition.min.js' ></script>
<!--===============================================================================================-->
	<script src='../logsignup/vendor/bootstrap/js/popper.js' ></script>
	<script src='../logsignup/vendor/bootstrap/js/bootstrap.min.js'></script>
<!--===============================================================================================-->
	<script src='../logsignup/vendor/select2/select2.min.js'></script>
<!--===============================================================================================-->
	<script src='../logsignup/vendor/daterangepicker/moment.min.js' ></script>
	<script src='../logsignup/vendor/daterangepicker/daterangepicker.js'></script>
<!--===============================================================================================-->
	<script src='../logsignup/vendor/countdowntime/countdowntime.j'></script>
<!--===============================================================================================-->
	<script src='../logsignup/js/main.js'></script>

</body>
</html>