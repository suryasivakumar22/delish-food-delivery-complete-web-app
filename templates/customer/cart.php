<?php
   session_start();
   $conn38u38 = mysqli_connect('localhost', 'root','rootpw', $_SESSION['numberl'].'b');
   $oyk = "SELECT * from cart";
   $m1 = mysqli_query($conn38u38, $oyk);
   $e1 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
   $i11 = 0;
   foreach ($e1 as $v) {
   		$i11 += $v['priceXqnty'];
   }
   $uyk = 'SELECT * from address';
   $m4 = mysqli_query($conn38u38,$uyk);
   if ($m4) {
   		$e4 = mysqli_fetch_all($m4,MYSQLI_ASSOC);
   }
   $ogk ="SELECT * from checkout";
   $m8 = mysqli_query($conn38u38,$ogk);
   if ($m8) {
   	$e9 = mysqli_fetch_all($m8,MYSQLI_ASSOC);
   	# code...
   }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCnK-hYaGn4hUGGzeGlCUuGXBhhXyFReM&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
	

	<link rel="stylesheet" type="text/css" href="G:/delish/delish/static-files/index/style.css">

	<title>Cart</title>

</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
	body{
		 font-family: 'Ubuntu Condensed';
	}
	nav{
		background: white;
	}
	#ft a{
		font-size: 20px;
	}
	
	.container a{
		font-weight: 100em;
	}
	.card{
		align-items:  left;
		width: 30%;
		float: right;
		align-self: flex-start;
		padding: 25px;
		margin: 10px;
		border-radius: 5px;
		
		
	}
	#c2{
		align-items:  left;
		width: 55%;
		float: left;
		align-self: flex-start;
		padding: 25px;
		margin: 10px;
		border-radius: 5px;
	}
	#cid{
		width: 100%;
		padding-right: 10%;
		text-align:left;
		align-self: flex-start;
	}
	#cid2{
		width: 100%;
		margin-top: 10%;
		text-align:left;
		align-self: flex-start;
	}
	#loc{
		float: left;
		margin-left: 20%;
		margin-top:12%;
		
		position: absolute;

	}
	#loc button{
		margin-right: 12%;
		background: black;
		color: white;
		border-radius:5px;
		padding: 10px;
		width: 25%;
		border:none;
	}
	h5{
		margin-bottom: 15px;
	}
	hr{
		border-top: 2px solid black;
		text-decoration: none;
	}
	.but button{
		margin-left: 33%;
		background: black;
		color: white;
		border-radius:5px;
		padding: 5px;
		width: 35%;
		border:none;
		outline: none;
		margin-top:20px;
	}
	.but1 button{
		margin-left: 30%;
		margin-top: 2%;
		background: black;
		color: white;
		border-radius:10px;
		padding: 5px;
		width: 10%;
		border:none;
		outline: none;

	}
	#but2 {
		margin-left:8px; 
		background: transparent;
		color: white;
		border-radius:10px;
		padding: 5px;
		width: 50%;
		border:none;
		outline: none;

	}
	 input{
        height: 5%;
        color:black;
       }
        #map {
          height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
          height: 100%;
          margin: 0;
          padding: 0;
          background: #e5e5e5;
        }

        #description {
          font-family: "Ubuntu Condensed";
          font-size: 15px;
          font-weight: 300;
        }

        #infowindow-content .title {
          font-weight: bold;
        }

        #infowindow-content {
          display: none;
        }

        #map #infowindow-content {
          display: inline;
        }

        .pac-card {
          margin: 10px 10px 0 0;
          border-radius: 2px 0 0 2px;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
          outline: none;
          box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
          background-color: #fff;
          font-family: Roboto;
        }

        #pac-container {
          padding-bottom: 12px;
          margin-right: 12px;
        }

        .pac-controls {
          display: inline-block;
          padding: 5px 11px;
        }

        .pac-controls label {
          font-family: Roboto;
          font-size: 13px;
          font-weight: 300;
        }

        #pac-input {
          background-color: #fff;
          font-family: 'ubuntu Condensed';
          font-size: 20px;
          font-weight: 300;
          margin-left: 12px;
          padding: 0 11px 0 13px;
          text-overflow: ellipsis;
          width: 400px;
          height: 35px;
          border-radius: 10px;
          outline: none;
          border: 1px solid rgb(206,212,218);
        }

        #pac-input:focus {
          border-color: #263238;
          box-shadow:  0 5px 5px rgba(0,0,0,0.05);
        }

        #title {
          color: #fff;
          background-color: #4d90fe;
          font-size: 25px;
          font-weight: 500;
          padding: 6px 12px;
        }

        #target {
          width: 345px;
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
		#rakkama{
			margin-left: 10px;
			width: 25%;
			
		}
		#navbarNav15 a{
				font-size: 22px;
			}
		#navbarNav15 a:hover{
			color: black;
			font-weight: bolder;
		}
		#opo:hover{
			font-weight: bolder;
		}
		#opk{
			font-size: 18px;
		}
		.cle{
	background: transparent;
	border: none;
	width: 20px;
	color: #263238;
	transform: scale(1.65);
}
#oppp{
	margin-top: 20px;
	background: transparent;
	border: 1px solid rgb(206,212,218);
	 
	height: 55px;
	outline: none;
}
#hak{

	font-size: 14px;
	font-weight: bolder;
	padding-top: 20px;
}
#poku{
	margin-top: 10px;
	font-size: 20px;
	border-top: 2px solid black;
	
}
#kol{
		height: 450px; 
                overflow-x: hidden; 
                overflow-y: auto; 
                text-align:justify; 
}

	.modal .modal-dialog-aside{
	width: 30%;
	max-width:80%; height: 100%; margin:0;
	transform: translate(0); transition: transform .2s;}
	.modal .modal-dialog-aside .modal-content{  height: inherit; border:0; border-radius: 0;}
	.modal .modal-dialog-aside .modal-content .modal-body{ overflow-y: auto }
	.modal.fixed-left .modal-dialog-aside{ margin-left:auto;  transform: translateX(100%); }
	.modal.fixed-right .modal-dialog-aside{ margin-right:auto; transform: translateX(-100%); }

	.modal.show .modal-dialog-aside{ transform: translateX(0);  }
	h1{
		font-weight: bolder;
	}
	#ho6 button{
		background: transparent;
		outline: none;
		border: 1px solid rgb(206,212,218);
		height: 40px;
		width: 40%;
	}/*
	#ho6 button:hover{
		box-shadow: 0 5px 5px rgba(0,0,0,0.3);
	}*/
	#heoi{
		margin-top: 100px;
		height: 420px;
		width: 420px;
		margin-left: 450px;
	}
</style>

<body>
	<nav class="navbar  navbar-expand-lg navbar-light fixed-top " >
		  <div class="container" id="ft">
		  	<a href="home1.php">
		    <img src="../../logsignup/ha/delis.jpeg" id="logo" >
		</a>
<!--		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		 	  <input id="searchTextField" type="text" size="50"> 
		    </button>
		-->
		    <div class="collapse navbar-collapse" id="navbarNav">
		      
		      <ul class="navbar-nav ml-auto">
		      	<li class="nav-item">
		      		<a class="nav-link active" href="#" id="opo">
		      			<svg class="_1GTCc" viewBox="6 0 12 24" width="25" height="25" fill="black"><path d="M11.9923172,11.2463768 C8.81761115,11.2463768 6.24400341,8.72878961 6.24400341,5.62318841 C6.24400341,2.5175872 8.81761115,0 11.9923172,0 C15.1670232,0 17.740631,2.5175872 17.740631,5.62318841 C17.740631,8.72878961 15.1670232,11.2463768 11.9923172,11.2463768 Z M11.9923172,9.27536232 C14.0542397,9.27536232 15.7257581,7.64022836 15.7257581,5.62318841 C15.7257581,3.60614845 14.0542397,1.97101449 11.9923172,1.97101449 C9.93039471,1.97101449 8.25887628,3.60614845 8.25887628,5.62318841 C8.25887628,7.64022836 9.93039471,9.27536232 11.9923172,9.27536232 Z M24,24 L0,24 L1.21786143,19.7101449 L2.38352552,15.6939891 C2.85911209,14.0398226 4.59284263,12.7536232 6.3530098,12.7536232 L17.6316246,12.7536232 C19.3874139,12.7536232 21.1256928,14.0404157 21.6011089,15.6939891 L22.9903494,20.5259906 C23.0204168,20.63057 23.0450458,20.7352884 23.0641579,20.8398867 L24,24 Z M21.1127477,21.3339312 L21.0851024,21.2122487 C21.0772161,21.1630075 21.0658093,21.1120821 21.0507301,21.0596341 L19.6614896,16.2276325 C19.4305871,15.4245164 18.4851476,14.7246377 17.6316246,14.7246377 L6.3530098,14.7246377 C5.4959645,14.7246377 4.55444948,15.4231177 4.32314478,16.2276325 L2.75521062,21.6811594 L2.65068631,22.0289855 L21.3185825,22.0289855 L21.1127477,21.3339312 Z"></path></svg> <?php echo $_SESSION['enop'][0]['name']; ?>
		      		</a>
		      	</li>
		         
		        
		        
		    
		      </ul>
		    </div>
		  </div>
		</nav>
	<?php if ($e1){?>
		<div  id="cid">

		<div class="card" >	
		<table>
		<tr>
			<th><h3 style="font-weight: bolder;">Checkout</h3></th>
			<th></th>
			<th></th>
		</tr>
		<tr>
		<?php foreach ($e1 as $vark) { 
			?>

			<td id="opk"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
										width="15" height="15"
										viewBox="0 0 172 172"
										style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#29c836"><path d="M150.5,150.5h-129v-129h129zM28.66667,143.33333h114.66667v-114.66667h-114.66667z"></path><path d="M86,46.58333c-21.76922,0 -39.41667,17.64744 -39.41667,39.41667c0,21.76922 17.64744,39.41667 39.41667,39.41667c21.76922,0 39.41667,-17.64744 39.41667,-39.41667c0,-21.76922 -17.64744,-39.41667 -39.41667,-39.41667z">
							  </path></g></g>
						  </svg> <?php echo $vark['products']; ?></td>
			<td> <?php echo $vark['qnty']; ?></td>
			<td>₹<?php echo $vark['priceXqnty']; ?></td>
		</tr>
		<?php 
		}; ?>
		</table>

		<button id="oppp" data-toggle="modal" data-target="#modal_aside_left" type="button">
			Apply Coupon
		</button>
		<div id="hak">Bill Details</div>
		<table style="color:#686b78 ">
			<tr>
				<th></th>
				<th></th>
			</tr>
			<tr>
				<td>Item Total</td>
				<td >₹<?php echo $i11; ?></td>
			</tr>
		
			<tr>
				<td>Delivery partner fee</td>
				<td style="padding-left: ">₹<?php echo $i11*(0.1); ?></td>
			</tr>
		
			
			<tr>
				<td>Taxes and Charges</td>
				<td style="">₹<?php echo $i11*(18/100); ?></td>
			</tr>
		
			<tr id="poku" style="color: black;">
				<td>To Pay</td>
				<td >₹<?php echo $i11*(18/100)+$i11*(0.1)+$i11; ?></td>
			</tr>
		</table>
			<div class="but">
				<form method="POST" action="cartcheck.php">
					<button type="submit" value="submit" name="hepi" id="hepi">Proceed To Pay</button>
				</form>
			</div>
		</div>
</div>
	<div class="container" id="cid2">
		<div class="card" id="c2" >	
			<h1> Choose Your Location</h1>
			<div id="ho6">
				<?php if (empty($e4)) { ?>
				<button id="ral" data-toggle="modal" data-target="#modal_aside_right1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> Enter a new location</button>
			<?php }else{ ?>
			<button data-toggle="modal" data-target=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg> choose a location</button>
			<?php } ?>
			</div>
		</div>
		
		
	</div>
<div class="container" id="cid2">
		<div class="card" id="c2" >	
			<?php if ($e9) { ?>
			<h1 style="color: grey;">Payment</h1>
		<?php }else{ ?>
			<h1>Payment</h1>
		<?php } ?>
		</div>
</div>
<div id="modal_aside_left" style="margin-left: 20px" class="modal fixed-left fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border: none;outline: none;">
      	
        <button type="button" style="outline: none;margin-right: 100%;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></span></span>
        </button>

        <div>
      		<input type="text" name="yov">
      	</div>
      </div>
      <div class="modal-body">
        
      </div>
      
    </div>
  </div> <!-- modal-bialog .// -->
</div> 
<div id="modal_aside_right1" class="modal fixed-right fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
     <div class="modal-header" style="border: none;outline: none;">
      	
        <button type="button" style="outline: none;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></span></span>
        </button>

      
      </div>
      <div class="modal-body">
      

      </div>
      
    </div>
  </div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<?php }else{ ?>
	<img id="heoi" src="../../logsignup/enpt.png">
	<h1 style="color: grey;margin-left: 535px;">Your Cart Is Empty</h1>
<?php } ?>
</body>
</html>