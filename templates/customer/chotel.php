<?php
#$conn = mysqli_connect('localhost', 'root','rootpw', 'delish');
session_start();
$conn = mysqli_connect('localhost', 'root','rootpw', $_SESSION['het'].'a');
$query = 'select * from mycategories';
$e = mysqli_query($conn, $query);
$fa = mysqli_fetch_all($e,MYSQLI_ASSOC);
$quer = 'SELECT  * FROM  rconfig' ;
$e45 = mysqli_query($conn, $quer);
$fa45 = mysqli_fetch_all($e45,MYSQLI_ASSOC);
$conn1895 = mysqli_connect('localhost','root','rootpw',$_SESSION['numberl'].'b');
$oip = "SELECT * FROM cart";
$ouk = mysqli_query($conn1895,$oip);
$oimp = mysqli_fetch_all($ouk,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>products</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
html{
	scroll-behavior:smooth;
}
nav{
	background: white;
}
body{
	font-family: 'Ubuntu Condensed';
	font-size: 23px;
}
.card-horizontal {
	font-family: 'Ubuntu Condensed';
	display: flex;
	flex: 1 1 auto;
}
.wes{
	position: fixed;
	float: left;
	margin-left: 10px;
	width: 100%;
	background: transparent;
	margin-top: 35px;
	margin-left: 65px;
	font-weight: bold;
	text-decoration: none;
	color: black;
	font-size: 23px;
	border-right: 1px solid black;
	border-width: 5px; 
	border-radius: 5px;   
}
.wes a{
	text-decoration: none;
}
#aud{
	outline: none;
}
	


.cer{
	padding-left: 20%;
}
h1{
	font-family: 'Ubuntu Condensed';
}
h6{
	font-family: 'Ubuntu Condensed';
}
h2{
	font-family: 'Ubuntu Condensed';
}
.img-square-wrapper img{
	margin-left: 10px;
	border-radius: 5px;
	margin-top: 10px;
	height: 165px;
	width: 254px;
	transition: 0.5s;
	border: 0;
}
.card-horizontal{
	border: none;
}
.cla{
	width: 75px;
	height: 38px;
	background: white;
	border:1px solid #263238;
	border-radius: 5px;
	color: black;
}
.cla:hover{
	background: black;
	color: white;
}

#car h2{
	margin-top: 0;
	width: 100px;
}

#ifd{
	border-bottom: 1px solid rgb(206,212,218);
	border-top: none;
	border-right: none;
	border-left: none;
}
#img{
	height: 108px;
	width: 128px;
	margin-top: 45px;
	margin-right: 27px;
	border-radius: 5px;
}
.ooo{
	margin-left: 120%;
	-webkit-transform: translate(-40%,35%);
}
button{
	outline: none;
}
#podu{
	margin-top:5%;
	margin-bottom:3%;
}
#jumbu{
	margin-top: 0px;
	position: fixed;
	z-index: 9;
	width: 100%;
	border-radius: 5px;
	transition: 0.5s;
}
#ya{
	background: #171a29;
}
#bdn {
	color: white;
}
.ju{
	position: fixed;
	overflow: auto;
	width:160px;
}
.oyi{
	margin-left: 22.5%;
	color: black;
}
nav{
		background: white;
		height: 9%;
 }
#i5{
	padding-top: 25%;
}
.cle{
	background: transparent;
	border: none;
	width: 20px;
	color: black;
	transform: scale(1.65);
}
h3{
	font-family: 'Ubuntu Condensed'
}
.ho{
	display: inline-block;
}
#i1{
	padding-top: 23%;
	padding-left: 10%;
	font-size: 100px;
	color: #808080;
	font-weight: ;
}
#jumbu{
	 	margin-top:45px;
	 	border-radius: 0;
	 	background: black;
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
	}
	.navbar{
		height: 14%;

	}
	.modal .modal-dialog-aside{
	width: 30%;
	max-width:80%; height: 100%; margin:0;
	transform: translate(0); transition: transform .2s;
}
	.modal .modal-dialog-aside .modal-content{  height: inherit; border:0; border-radius: 0;}
	.modal .modal-dialog-aside .modal-content .modal-body{ overflow-y: auto }
	.modal.fixed-left .modal-dialog-aside{ margin-left:auto;  transform: translateX(100%); }
	.modal.fixed-right .modal-dialog-aside{ margin-right:auto; transform: translateX(-100%); }
	.modal.show .modal-dialog-aside{ transform: translateX(0);  }
	.modal-header {
		outline: none;
		border: none;
	}
	.modal-content{
		padding-left: 10%;
		padding-right: 10%;
	}
	#add1{
		border: 1px solid rgb(206,212,218);
		outline: none;
		height: 45px;
		width: 100%;
		font-family: 'Ubuntu Condensed';
		font-size: 20px;
		padding-left: 10px;
		color: grey;
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
	
</style>
</head>
<body>

	<input type="hidden" id="hnu" value="<?php echo $_SESSION['het'].'a' ?>">
	<input type="hidden" id="hna" value="<?php echo $fa45[0]['restaurantname'] ?>">
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
		      <ul class="navbar-nav">
		      	<li class="nav-item">
		      		<?php if (isset($enopa)) {
		      		    ?>
		      		<a class="nav-link active" data-toggle="modal" data-target="#modal_aside_right">
		      		  hey
		      		</a>
		      	<?php }else{ ?>
		      		<div id="navbarNav15">
			      		<a class="nav-link active" href="#" data-toggle="modal" data-target="#modal_aside_right" id="hiii">
			      		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
						  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
						  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
			      		  Add Address
			      		</a>
		      		</div>
		      	<?php } ?>
		      	</li>
		      </ul>
		      <ul class="navbar-nav ml-auto">
		      	<li class="nav-item">
		      		<a class="nav-link active" href="#" id="opo">
		      			<svg class="_1GTCc" viewBox="6 0 12 24" width="25" height="25" fill="black"><path d="M11.9923172,11.2463768 C8.81761115,11.2463768 6.24400341,8.72878961 6.24400341,5.62318841 C6.24400341,2.5175872 8.81761115,0 11.9923172,0 C15.1670232,0 17.740631,2.5175872 17.740631,5.62318841 C17.740631,8.72878961 15.1670232,11.2463768 11.9923172,11.2463768 Z M11.9923172,9.27536232 C14.0542397,9.27536232 15.7257581,7.64022836 15.7257581,5.62318841 C15.7257581,3.60614845 14.0542397,1.97101449 11.9923172,1.97101449 C9.93039471,1.97101449 8.25887628,3.60614845 8.25887628,5.62318841 C8.25887628,7.64022836 9.93039471,9.27536232 11.9923172,9.27536232 Z M24,24 L0,24 L1.21786143,19.7101449 L2.38352552,15.6939891 C2.85911209,14.0398226 4.59284263,12.7536232 6.3530098,12.7536232 L17.6316246,12.7536232 C19.3874139,12.7536232 21.1256928,14.0404157 21.6011089,15.6939891 L22.9903494,20.5259906 C23.0204168,20.63057 23.0450458,20.7352884 23.0641579,20.8398867 L24,24 Z M21.1127477,21.3339312 L21.0851024,21.2122487 C21.0772161,21.1630075 21.0658093,21.1120821 21.0507301,21.0596341 L19.6614896,16.2276325 C19.4305871,15.4245164 18.4851476,14.7246377 17.6316246,14.7246377 L6.3530098,14.7246377 C5.4959645,14.7246377 4.55444948,15.4231177 4.32314478,16.2276325 L2.75521062,21.6811594 L2.65068631,22.0289855 L21.3185825,22.0289855 L21.1127477,21.3339312 Z"></path></svg> <?php echo $_SESSION['enop'][0]['name']; ?>
		      		</a>
		      	</li>
		         
		        <li class="nav-item">
		            <a class="nav-link active" href="cart.php">
		            	<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="black" class="bi bi-bag" id="hike" viewBox="0 0 16 16">
					  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
				   </svg>
		            	 Cart
		            	<!--
		          	  <i class="fa fa-shopping-cart"></i>
		          	  -->
		            </a>
		        </li>
		        
		        
		    
		      </ul>
		    </div>
		  </div>
		</nav>
	<div id="jumnn">
	<div  id='jumbu'>
		<div class="container-fluid" id="podu">
			<div class="row" >
					<div class="col-12 mt-3">
							<div class="card-horizontal" id="bdn">
								<div class="img-square-wrapper">
									 <img class="img" id="op1" src="<?php echo '../../uploadedfiles/'.$_SESSION['het'].'a/thumbnails/mainthumb/'.$fa45[0]['imgname']; ?>" alt="Card image cap" >
								</div>
								<div class="card-body">
									<h1 id="thumbi" class="card-title"><?php echo $fa45[0]['restaurantname'];?></h1>
									<div id='opp'>
									<h6 id="op" class="card-text"  ><?php echo $fa45[0]['rcuisines'];?></h6>
									</div>
									<p class="p">   ratings | delivery time  |  cost for two </p>
								</div>
							</div>
							
							</div>
				</div>  
		</div>
	</div>
</div>
<?php if (isset($_SESSION['numberl'])) {?>
<div id="i5">
 <div class="row">
	<div class="container" >
			<div class="wes" id="ws">
			 <?php
				foreach ($fa as $value) {

				?>
				<div class="idd">
				<a style="color: black;" ><?php echo ucwords($value['categories']);?></a>
				</div>
			 <?php } ?>
			</div>
   </div>
</div>

<div class="container" >
  <div >	
	<?php foreach ($fa as $valv) {
		$qio = 'select * from '.$valv['categories'];
		$eio = mysqli_query($conn, $qio);
		$faip = mysqli_fetch_all($eio,MYSQLI_ASSOC);
	?>
	<div class="row" id="<?php  echo '#'.$valv['categories']; ?>">
		<div class="oyi" >
			<h1 style="font-weight:bold;margin-top: 30px;margin-bottom: 0;">
			<?php  echo ucwords($valv['categories']); ?>	
			</h1>
		</div>
		
		<div class="col-12 mt-3" >
			<?php $i22 = 0;
			while ( $i22 < count($faip)) { ?>
			<div class="cer">
				<div class="card " id="ifd" style="width:65%">
				  <div class="card-horizontal">
					 <div class="card-body" id="car">
						<div class="form-check-label">
						<?php  if ($faip[$i22]['cat'] === 'veg') {  ?>
						<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
										width="24" height="24"
										viewBox="0 0 172 172"
										style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="#ffffff"></path><g fill="#29c836"><path d="M150.5,150.5h-129v-129h129zM28.66667,143.33333h114.66667v-114.66667h-114.66667z"></path><path d="M86,46.58333c-21.76922,0 -39.41667,17.64744 -39.41667,39.41667c0,21.76922 17.64744,39.41667 39.41667,39.41667c21.76922,0 39.41667,-17.64744 39.41667,-39.41667c0,-21.76922 -17.64744,-39.41667 -39.41667,-39.41667z">
							  </path></g></g>
						  </svg>
						<?php }else{ ?>
							<img width=24 height='24' src="https://img.icons8.com/color/48/000000/non-vegetarian-food-symbol.png"/>
						<?php } ?>
						</div>

						<div class="form-check-label">
						<h2 class="card-title" style="font-size: 1.22rem;width: 100%;" ><strong><?php echo  ucwords($faip[$i22]['mname']); ?></strong></h2>
						</div>
						
						<h5 class="card-text"><?php echo 'Rs.'.$faip[$i22]['price']; ?></h5>
						<?php if ($faip[$i22]['stock'] === 'instock') { ?>
							<button type="hidden" class="cla" style="outline: none;"  id="<?php echo  $faip[$i22]['id'].$valv['categories'].'a'; ?>" value="<?php echo  $faip[$i22]['id'].$valv['categories'].'a'; ?>">
								<div class="clee" id="<?php echo  $faip[$i22]['id'].$valv['categories'].'a'; ?>">
								</div> 
								Add
							</button>
							<input type="hidden"  id="<?php echo  $faip[$i22]['id'].$valv['categories'].'o'; ?>" value="<?php echo $valv['categories']; ?>">
							<div  class="<?php echo  $faip[$i22]['id'].$valv['categories'].'a'; ?>" style='display: none;'>

								<button type="button" style="outline: none;" id="<?php echo  $faip[$i22]['id'].$valv['categories'].'c'; ?>" class="cle">
									-
								</button>
								<input type="hidden" id="<?php echo  $faip[$i22]['id'].$valv['categories'].'z'; ?>" value="<?php echo $faip[$i22]['mname'] ?>">
								<div id="<?php echo  $faip[$i22]['id'].$valv['categories'].'b'; ?>" style="display: inline-block;">
									1
								</div>
								<button type="button" style="outline: none;" id="<?php echo  $faip[$i22]['id'].$valv['categories'].'d'; ?>" class="cle">
									+
								</button>
							</div>
						
						<?php }else{ ?>
							outofstock
						<?php } ?>
					</div>
					<div>
						
					</div>
					<div class="img">
						<img id="img" src="<?php echo '../../uploadedfiles/'.$_SESSION['het'].'a/thumbnails/menuthumb/'.$valv['categories'].'/'.$faip[$i22]['imagename']; ?>" alt="Card image cap" width="100">
					</div>

				</div>
				
				</div>
			</div>
					 <?php $i22++;

				 } ?>
		 </div>

		</div>
<?php } ?>
</div>
	</div>
</div>
<div id="modal_aside_right" class="modal fixed-right fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-aside" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-x" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></span>
        </button>
      </div>
      <div class="modal-body">
      		<input id="add1" type="text" name="add1" placeholder="Search for Address">	
      		<div id="kiki">
      			
      		</div>
      </div>
      <div class="modal-footer" style="outline: none;border: none;">
       </div>
    </div>
  </div> <!-- modal-bialog .// -->
</div> <!-- modal.// -->

<script src="chotelsrc.js">

</script>
<script type="text/javascript">
	  var inputBox = document.getElementById('add1');
			inputBox.onkeyup = function(){
		   
		    let kmp = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query='
		     var hikp =inputBox.value;
		    let rmp = kmp.concat(hikp.replace(/ +/g, ""));
		    let xmp = rmp.concat('&key=AIzaSyDCnK-hYaGn4hUGGzeGlCUuGXBhhXyFReM');
		    console.log(xmp);
		   	$.getJSON(xmp, function(emp) { 
                     $('#kiki').html(emp.results);

                }); 
		}

</script>
 <script>
// When the user scrolls down 50px from the top of the document, resize the header's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 91 || document.documentElement.scrollTop > 91) {
	document.getElementById("jumnn").style.fontSize = "18px";
	document.getElementById("op1").style.width = "200px";
	document.getElementById("op").style.display = 'none';
	document.getElementById("op1").style.height = "120px";
	document.getElementById("navu").style.display = 'none';
	document.getElementById("podu").style.margin = '0 0 15px 0';
	document.getElementById("thumbi").style.fontSize = "23px";
  } else {
	document.getElementById("jumnn").style.fontSize = "23px";
	document.getElementById("op1").style.width = "254px";
	document.getElementById("op1").style.height = "165px";
	document.getElementById("op").style.display = 'block';
	document.getElementById("navu").style.display = '';
	document.getElementById("podu").style.margin = '5% 0 3% 0';
	document.getElementById("thumbi").style.fontSize = "36px";

	}
}
</script>
<?php }else{
 ?>
<div id="i1">
	pls login you will be redirected to home page
</div>
<script type="text/javascript">
	window.setTimeout(function(){

        window.location.href = "home1.php";

    }, 2000);

</script>
<?php } ?>
<script
	  src="https://code.jquery.com/jquery-3.5.1.js"
	  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>