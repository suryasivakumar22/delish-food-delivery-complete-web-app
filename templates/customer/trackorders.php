<?php
session_start();
$conn25 = mysqli_connect('localhost','root','rootpw','delish');
$aym = 'SELECT name from signup where number= "'.$_SESSION['numberl'].'"';
$arr = mysqli_query($conn25,$aym);
$enop = mysqli_fetch_all($arr,MYSQLI_ASSOC);
$conn285 = mysqli_connect('localhost','root','rootpw',$_SESSION['numberl'].'b');
$holdk = "SELECT * from checkout where ordernumber = '".$_SESSION['ordernum']."'";
$orku = mysqli_query($conn285,$holdk);
$kuloi = mysqli_fetch_all($orku,MYSQLI_ASSOC);
$conn981 = mysqli_connect('localhost','root','rootpw','dmanager');
$loki1 = "SELECT name,dnumber from dsignup where status = 'assignedto".$_SESSION['numberl']."b".$_SESSION['ordernum']."'";
$kalaki1 = mysqli_query($conn981,$loki1);
$runk1 = mysqli_fetch_all($kalaki1,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
		 body{
		 	background: #e5e5e5;
		 	font-family: "Ubuntu Condensed";
		 }	
		 #cen{
		 	margin-top: 230px;
		 	font-size: 30px;
		 	font-weight: bolder;
		 	background: white;
		 	padding: 50px;
		 	width: 800px;
		 	border-radius: 5px;
		 	transition:1s; 
		 	margin-left: 300px;
		 }
		#cen a{
			font-size:20px;
			color: blue;
			text-decoration: none;
		}
		img{
	 	height: 165px;
        width: 254px;
	 }
	 #jumbu{
	 	margin-top:85px;
	 	border-radius: 0;
	 	background: black;
	 }
	 nav{
	 	background: white;
	 	height: 9%;

	 }
	 #ft img{
		border-radius: 5px;
		width: 60px;
		height: 60px;
		transition: 1s;
	}
	#ft img:hover{
		transform: scale(1.1);
	}
	#ft a{
		font-size: 27px;
		margin-left: 30px;
	}
	#ft svg{
		margin-bottom: 4px;
	}
	.navbar{
		height: 14%;

	}
	#ft img{
		border-radius: 5px;
		width: 60px;
		height: 60px;
		transition: 1s;
		margin-left:0;
	}
	#navbarNav15 a{
		font-size: 22px;
	}
	#navbarNav15 a:hover{
		color: black;
		font-weight: bolder;
	}
	</style>
</head>
<body >
	<nav class="navbar  navbar-expand-lg navbar-light fixed-top " >
		  <div class="container" id="ft">
		  	<a href="home1.php">
		    <img src="../../logsignup/ha/delis.jpeg" id="logo" >
		</a>
		    <div class="collapse navbar-collapse" id="navbarNav">
		     <ul class="navbar-nav">
		      	<li class="nav-item">
		      	
		      		<div id="navbarNav15">
			      		<a class="nav-link active"  id="hiii">
			      		Order Number:
			      		  #<?php echo 
$_SESSION['ordernum']; ?>
			      		</a>
		      		</div>
		      	</li>
		      </ul>
		      <ul class="navbar-nav ml-auto">
		      	<li class="nav-item">
		      		<div id="navbarNav15">
		      		<a class="nav-link active" href="#" id="opo">
		      			<svg class="_1GTCc" viewBox="6 0 12 24" width="25" height="25" fill="black"><path d="M11.9923172,11.2463768 C8.81761115,11.2463768 6.24400341,8.72878961 6.24400341,5.62318841 C6.24400341,2.5175872 8.81761115,0 11.9923172,0 C15.1670232,0 17.740631,2.5175872 17.740631,5.62318841 C17.740631,8.72878961 15.1670232,11.2463768 11.9923172,11.2463768 Z M11.9923172,9.27536232 C14.0542397,9.27536232 15.7257581,7.64022836 15.7257581,5.62318841 C15.7257581,3.60614845 14.0542397,1.97101449 11.9923172,1.97101449 C9.93039471,1.97101449 8.25887628,3.60614845 8.25887628,5.62318841 C8.25887628,7.64022836 9.93039471,9.27536232 11.9923172,9.27536232 Z M24,24 L0,24 L1.21786143,19.7101449 L2.38352552,15.6939891 C2.85911209,14.0398226 4.59284263,12.7536232 6.3530098,12.7536232 L17.6316246,12.7536232 C19.3874139,12.7536232 21.1256928,14.0404157 21.6011089,15.6939891 L22.9903494,20.5259906 C23.0204168,20.63057 23.0450458,20.7352884 23.0641579,20.8398867 L24,24 Z M21.1127477,21.3339312 L21.0851024,21.2122487 C21.0772161,21.1630075 21.0658093,21.1120821 21.0507301,21.0596341 L19.6614896,16.2276325 C19.4305871,15.4245164 18.4851476,14.7246377 17.6316246,14.7246377 L6.3530098,14.7246377 C5.4959645,14.7246377 4.55444948,15.4231177 4.32314478,16.2276325 L2.75521062,21.6811594 L2.65068631,22.0289855 L21.3185825,22.0289855 L21.1127477,21.3339312 Z"></path></svg> <?php echo $enop[0]['name'];  ?>
		      		</a>
		      	</div>
		      	</li>
		          <li class="nav-item">

		          <a class="nav-link active" aria-current="page" href="Logout.php">
		          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
</svg>
		          	Logout
	
			    </a>
			</li>  </ul>
		    </div>
		  </div>
		</nav>
		<?php if ($kuloi) { ?>
		<div id="cen">
			<div id="gaandu" >
				<div style="display: block;font-size: 30px; ;">Order Status</div> <div style="display: inline-block;float: ;">
					<div style="font-size: 25px;font-weight: lighter;"><?php echo $kuloi[0]['status']; ?></div>
			    </div>
			    
			</div>
			
			<div style="margin-top: 10px;margin-left: ;">
				<div style="display: block;font-size: 30px; ;">Delivery Agent</div> <div style="display: block;">
					<div style="font-size: 25px;font-weight: lighter;display: inline-block;"><?php echo $runk1[0]['name']; ?></div>
					<div style="font-size: 20px;font-weight: lighter;display: inline-block;margin-left:450px;">+91 <?php echo $runk1[0]['dnumber']; ?></div>
			    </div>
			</div>
			    
			
			
		</div>
	<?php }else{ ?>
		<div id="cen">
			<center>
				No Orders at the Moment!
			</center>
		</div>
	<?php } ?>
</body>
</html>
