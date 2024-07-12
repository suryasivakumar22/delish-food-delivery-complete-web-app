<?php 
	$conn = mysqli_connect('localhost', 'root','rootpw', 'delish');
	session_start();
	require_once("../../sendmail.php");
	if(isset($_POST['submit'])){
		define('sr','signup');
		$olb = 0;
		$email1 = mysqli_real_escape_string($conn, $_POST['email1']);
		$_SESSION['email1'] = htmlentities($_POST['email1']);
		$query5 = 'select email,number from signup';
		$mrs = mysqli_query($conn, $query5);
		$env = mysqli_fetch_all($mrs);
		foreach ($env as $k1 => $v1) {
			foreach ($v1 as $k2 => $v2) {
				if ($v2 === $email1) {
					$olb = 1;
				}
			}
		}
		if ($olb === 1) {
			$_SESSION['otp1']= mt_rand(100000,999999);
			$_SESSION['email1'] = $email1;
    		new SendMail($email1,$email1,$_SESSION['otp1'], "this is ur otp");
			$_SESSION['page'] =   'login';
			header('location: ../otp1.php');
		}elseif ($olb === 0) {
			echo "pls signup , invalid email";
		}
	}
	/*mkdir('../../uploadedfiles'.$hnumber .'a'.'/required');
	    		mkdir('../../uploadedfiles'.$hnumber .'a'.'/thumbnails');
	    		mkdir('../../uploadedfiles'.$hnumber .'a'.'/thumbnails/menuthumb');
	    		mkdir('../../uploadedfiles'.$hnumber .'a'.'/thumbnails/mainthumb');*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href='logsignup/images/icons/favicon.ico' />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../../logsignup/vendor/bootstrap/css/bootstrap.min.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= '../..//logsignup/fonts/font-awesome-4.7.0/css/font-awesome.min.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../../logsignup/fonts/iconic/css/material-design-iconic-font.min.css'>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href= '../../logsignup/vendor/animate/animate.css' >
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href='../../logsignup/vendor/css-hamburgers/hamburgers.min.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../../logsignup/vendor/animsition/css/animsition.min.css'>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../../logsignup/vendor/select2/select2.min.css'>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href='../../logsignup/vendor/daterangepicker/daterangepicker.css' >
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href='../../logsignup/css/util.css'>
	<link rel="stylesheet" type="text/css" href='../../logsignup/css/main.css' >
<!--===============================================================================================-->
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-light fixed-top " id="hik" >
		  <div class="container" id="ft">
		  	<a href="home1.php">
		    <img src="../../logsignup/ha/delis.jpeg" id="logo" >
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
		        
		    
		      </ul>
		    </div>
		  </div>
		</nav>
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" >
			<form class="login100-form validate-form" method="POST">
				<span class="login100-form-title p-b-37">
					Login
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
					<input class="input100" type="text" name="email1" placeholder="Enter Email">
					<span class="focus-input100"></span>
				</div>
				<br>
			
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit" value="Submit">
						Proceed
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
					</span>
				</div>



				<div class="text-center">
					<a href="signup.php" class="txt2 hov1">
						signup
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src='../../logsignup/vendor/jquery/jquery-3.2.1.min.js'></script>
<!--===============================================================================================-->
	<script src='../../logsignup/vendor/animsition/js/animsition.min.js' ></script>
<!--===============================================================================================-->
	<script src='../../logsignup/vendor/bootstrap/js/popper.js' ></script>
	<script src='../../logsignup/vendor/bootstrap/js/bootstrap.min.js'></script>
<!--===============================================================================================-->
	<script src='../../logsignup/vendor/select2/select2.min.js'></script>
<!--===============================================================================================-->
	<script src='../../logsignup/vendor/daterangepicker/moment.min.js' ></script>
	<script src='../../logsignup/vendor/daterangepicker/daterangepicker.js'></script>
<!--===============================================================================================-->
	<script src='../../logsignup/vendor/countdowntime/countdowntime.j'></script>
<!--===============================================================================================-->
	<script src='../../logsignup/js/main.js'></script>

</body>
</html>