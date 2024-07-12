
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
	<?php
	$conn = mysqli_connect('localhost', 'root','rootpw', 'delish');
	session_start();
	require_once("../../sendmail.php");
	$_SESSION['conn'] = $conn;
	if(isset($_POST['submit'])){
		define('sr','signup');
		$ola = 2;
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$number = mysqli_real_escape_string($conn,$_POST['number']);
		$query2 = 'select email,number from signup';
		$mr = mysqli_query($conn, $query2);
		$en = mysqli_fetch_all($mr);

		foreach ($en as $k => $v) {
			foreach ($v as $k1 => $v1) {
				if ($v1 === $email || $v1 === $number) {
					$ola = 1;
					break;
				}
			}
		}
		if ($ola === 2) {
			$otp= mt_rand(100000,999999);
			$_SESSION['name'] = $name; 
			$_SESSION['email'] = $email;
			$_SESSION['number'] = $number;
			$_SESSION['otp'] = $otp;
			$_SESSION['page'] = 'signup';
    		new SendMail($email, $name,$_SESSION['otp'], "this is ur otp");
    		header('location: ../otp1.php');
			/*
			setcookie('name', $name, time()+3600);
			setcookie('email', $email, time()+3600);
			setcookie('number', $number, time()+3600);
			setcookie('otp', $otp, time()+3600);
			setcookie('const', 'signup', time()+3600);
			include('..\otp1.php');
			
			*/
		}elseif ($ola === 1) { ?>
			<script type="text/javascript">
				alert("ALREADY REGISTERED!")
			</script>
			
<?php 		}
	} ?>




	<nav class="navbar  navbar-expand-lg navbar-light fixed-top " >
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
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30" id="haha">
			<form class="login100-form validate-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
					<input class="input100" type="text" name="name" placeholder="Enter Name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter  Email">
					<input class="input100" type="text" name="email" placeholder="Enter Email">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Number">
					<input class="input100" type="text" name="number" placeholder="Enter Number" maxlength="10">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button  name="submit" value="Submit" class="login100-form-btn">
						Sign Up
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						
					</span>
				</div>



				<div class="text-center">
					<a href="login.php" class="txt2 hov1">
						Login
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