<?php
session_start();
$conn = mysqli_connect('localhost', 'root','rootpw', 'delish');
if (isset($_POST['submit'])) {
		if ($_SESSION['page'] === 'signup') {
				if ($_POST['otp'] == $_SESSION['otp'] ) {
							$quer = "INSERT INTO signup(name,email,number) VALUES('".$_SESSION['name']."','".$_SESSION['email']."','".$_SESSION['number']."')";
						    mysqli_query($conn,$quer);
						    $_SESSION['cdatab'] = $_SESSION['number']."b";
						    $quer1 = "CREATE DATABASE ".$_SESSION['cdatab'];
						    mysqli_query($conn,$quer1);
						    $conn2 = mysqli_connect('localhost', 'root','rootpw',$_SESSION['cdatab']);
						   	$quer2 = "CREATE table cart(id varchar(255)  , hotel varchar(255),products  varchar(255),category varchar(255) ,priceperproduct float,qnty int,priceXqnty float)";
						    mysqli_query($conn2,$quer2);
						    $quer3 = "CREATE table checkout(id int  ,ordernumber bigint, hotel varchar(255),cadd  varchar(255),status varchar(255),deliverypartnerfee float,tax float,subcost float,totalamt float)";
						    mysqli_query($conn2,$quer3);
						    $quer4 = "CREATE table address(id int  , address varchar(255),type  varchar(255))";
						    //$bill =  "CREATE table billings(id varchar(255),hotel varchar(255),products  varchar(255),category varchar(255) ,qnty int)";
						    mysqli_query($conn2,$bill);
						    mysqli_query($conn2,$quer4);
						    header('location: customer/login.php');
						    #create databse with number + b as name and one table for cart and checkout.
		}else{
			echo "<div class='hat'>invalid otp , enter the correct otp</div>";
		}
	}elseif ($_SESSION['page'] ===   'login') {
		if ($_POST['otp'] == $_SESSION['otp1'] ) {
			$quer5 = 'select * from signup where email ="'.$_SESSION['email1'].'"';
			$mrs1 = mysqli_query($conn, $quer5);
			$env1 = mysqli_fetch_all($mrs1,MYSQLI_ASSOC);
			$_SESSION['numberl']	= $env1[0]['number'];
			$_SESSION['namel']	= $env1[0]['name'];
			$_SESSION['emaill'] = $_SESSION['email1'];
			if ($_SESSION['numberl']) {
				header('location: customer/home1.php');}
		}else{
				echo "<div class='hat'>invalid otp , enter the correct otp</div>";
			}
	}elseif($_SESSION['page'] ===   'hsignup'){
		if ($_POST['otp'] == $_SESSION['otpp'] ) {
				$cname = $_SESSION['cname'];
				$hemail = $_SESSION['hemail11'];
				$que7 = "INSERT INTO hsignup(Restaurantname,hemail,hnumber,approved) values ('".$_SESSION['cname']."','". $_SESSION['hemail11']."','".$_SESSION['hnumber']."','notsubmitted')";
	    		$conn3 = mysqli_connect('localhost', 'root','rootpw', 'hmanager');
	    		#var_dump($_SESSION);
		    	mysqli_query($conn3, $que7);
	    		$quer8 = "create database ".$_SESSION['hnumber'].'a';
    			mysqli_query($conn3, $quer8);
    			
	    		$quer9 = "create table mycategories(id int ,categories varchar(255))";
	    		$conn4 = mysqli_connect('localhost', 'root','rootpw', $_SESSION['hnumber'].'a');
	    		mysqli_query($conn4, $quer9);
	    		#create live orders table 
	    		#create config table and insert dummy data
	    		$quer10 = "CREATE table rliveorders(id int ,ordernumber bigint,status varchar(255),contact varchar(255),subtotal float,total float)";
	    		$quer11 = "CREATE table rconfig(id int ,restaurantname varchar(255),remail varchar(255),rnumber int,raddress varchar(255),rdescription varchar(255),rpincode int,rcuisines varchar(255),imgname varchar(255))";
	    		mysqli_query($conn4, $quer10); 
	    		mysqli_query($conn4, $quer11);
	    		$quer12 = "INSERT INTO rconfig values(1,'null','null','null','null','null','null','null','null')";
	    		mysqli_query($conn4, $quer12);
	    		mkdir('../uploadedfiles/'.$_SESSION['hnumber'] .'a');
	    		mkdir('../uploadedfiles/'.$_SESSION['hnumber'].'a'.'/required');
	    		mkdir('../uploadedfiles/'.$_SESSION['hnumber'].'a'.'/thumbnails');
	    		mkdir('../uploadedfiles/'. $_SESSION['hnumber'].'a'.'/thumbnails/menuthumb');
	    		mkdir('../uploadedfiles/'. $_SESSION['hnumber'].'a'.'/thumbnails/mainthumb');#for images in customer page
	    		$_SESSION['foldname'] =  $_SESSION['hnumber']. 'a';
	    		header('location: hotel/hlogin.php');

		}else{
			echo "<div class='hat'>invalid otp , enter the correct otp</div>";
		}
	}elseif ($_SESSION['page'] === 'hlogin') {
		if ($_POST['otp'] == $_SESSION['otpp1'] ) {
			$conn7 = mysqli_connect('localhost', 'root','rootpw', 'hmanager');
			$quer11 = 'select hnumber,approved from hsignup where hemail = "'.$_SESSION['hemail1'].'"';
			echo $_SESSION['hemail1'];
			$mr11= mysqli_query($conn7, $quer11);
			$ps = mysqli_fetch_all($mr11, MYSQLI_ASSOC);
			$_SESSION['hdataba'] = $_SESSION['hdatab'].'a';
			$_SESSION['apap'] = $ps[0]['approved'];
			if ($ps[0]['approved'] === 'approved') {
				header('location: hotel/hadmin.php ');
			}elseif ($ps[0]['approved'] === 'submitted') {
				header('location: hotel/hconfig.php');
			}elseif ($ps[0]['approved'] === 'notsubmitted') {
				header('location: hotel/hfileupload.php');
			}elseif ($ps[0]['approved'] === 'bothsubmitted') {
				header('location: hotel/hsubmitted.php');
			}
		}
	}elseif ($_SESSION['page'] === 'dhome') {
		if ($_POST['otp'] == $_SESSION['otppd'] ) {
			$conn77 = mysqli_connect('localhost', 'root','rootpw', 'dmanager');
			$qued="INSERT INTO dsignup(name,demail,dnumber,status) values ('".$_SESSION['cdname']."','". $_SESSION['demail11']."','".$_SESSION['dnumber']."','notassigned')";
			$mrgg1= mysqli_query($conn77, $qued);
			header('location: deliveryboy/dlogin.php');
		}
	}elseif ($_SESSION['page'] === 'dlogin') {
		if ($_POST['otp'] == $_SESSION['otppd1'] ) {
			$conn77 = mysqli_connect('localhost', 'root','rootpw', 'dmanager');
			$quer141 = 'select dnumber,approved from dsignup where demail = "'.$_SESSION['demail1'].'"';
			$mr117= mysqli_query($conn77, $quer141);
			$ps = mysqli_fetch_all($mr117, MYSQLI_ASSOC);
			$_SESSION['ddataba'] = $_SESSION['ddatab'].'a';
			$_SESSION['apap'] = $ps[0]['approved'];
			header('location: deliveryboy/dadmin.php');
	}
}
}
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
<style type="text/css">
	.hat{
		color:#4B79A1 ;

	}
	#logo{
		width: 100px;
	}
</style>
</head>
<body>
	<nav class="navbar  navbar-expand-lg navbar-light fixed-top " id="hik" >
		  <div class="container" id="ft">
		  	<a href="home1.php">
		    <img src="../logsignup/ha/delis.jpeg" id="logo" >
		</a>
<!--		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		 	  <input id="searchTextField" type="text" size="50"> 
		    </button>
		
		    <div class="collapse navbar-collapse" id="navbarNav">
		      <ul class="navbar-nav ml-auto">
		       
		        <li class="nav-item">
		        	<a class="nav-link active" href="login.php">
		        		login <i class="fa fa-sign-in" ></i>

		        	</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link active" href="signup.php">
		        		signup
		        		<i class="fa fa-user-plus"></i>
		        	</a>
		        </li>
		         <li class="nav-item">

		          <a class="nav-link active" aria-current="page" href="card.html">
		          	Offers
				
		          <i class="fa fa-gift"></i>

			    </a>

		        </li>
		        <li class="nav-item">
		            <a class="nav-link active" href="#">
		            	cart
		            	
		          	  <i class="fa fa-shopping-cart"></i>
		          	 
		            </a>
		        </li>
		         -->
		        
		    
		     
		    </div>
		</nav>
	
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
		
