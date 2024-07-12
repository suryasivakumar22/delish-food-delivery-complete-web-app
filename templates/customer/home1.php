<?php
  session_start();
  $conn24 = mysqli_connect('localhost','root','rootpw','hmanager');
  $conn25 = mysqli_connect('localhost','root','rootpw','delish');
  #$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
  $qy = 'select * from hsignup where approved="approved"';
  $m = mysqli_query($conn24, $qy);
  $en1 = mysqli_fetch_all($m,MYSQLI_ASSOC);
  $e2 =array();
  foreach ($en1 as $value) {
      		$qur="select * from rconfig";
      		$co = mysqli_connect('localhost','root','rootpw',$value['hnumber'].'a');
      		$m1 = mysqli_query($co, $qur);
			$e1 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
      		array_push($e2,$e1[0]);
  }
  if (isset($_SESSION['numberl'])) {
  	$aym = 'SELECT name from signup where number= "'.$_SESSION['numberl'].'"';
  	$arr = mysqli_query($conn25,$aym);
  	$enop = mysqli_fetch_all($arr,MYSQLI_ASSOC);
  	$gvm = 'SELECT address from address';
  	$arra = mysqli_query($conn25,$gvm);
  	$_SESSION['enop'] = $enop;

  	if ($arra) {
  		  		$_SESSION['enopa'] = $enopa;
  		$enopa = mysqli_fetch_all($arra,MYSQLI_ASSOC);
  	}
  		
  }
  
  if (isset($_POST['clicked'])) {
  	$_SESSION['het'] = $_POST['clicked'];
  	if (isset($_SESSION['het'])) {
  		if (isset($_SESSION['numberl'])) {
  			header('location: chotel.php');
  		}else{
  			header('location: login.php');
  		}
  	}
}
  #var_dump($en1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<!-- CSS only -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!--<link rel="stylesheet" type="text/css" href="G:/delish/delish/static-files/index/style.css">
-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>delish</title>
	<!--api key-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCnK-hYaGn4hUGGzeGlCUuGXBhhXyFReM&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
	/*	::-webkit-scrollbar {
	  width: 10px;
	}


	::-webkit-scrollbar-track {
	  background: white; 
	}
	 

	::-webkit-scrollbar-thumb {
	  background:   #4B79A1; 
	  border-radius: 4px;
	}
	::-webkit-scrollbar-thumb:hover {
	  background: #263238; */
	#jumbu img{
		border-radius: 5px;
		width: 260px;
		display: inline-block;
		padding: 10px;
		height: 260px;
		transition: 0.75s;
		}
	#jumbu img:hover{
		transform: scale(1.1);
	}
	#ft a{
		font-size: 20px;
	}
	#dr{
		display: inline-block;
		margin: 20px;
		position: relative;
	}

	body{
			background: white;
			margin: 0;
		 	padding: 0;
		  	font-family: 'Ubuntu Condensed';
	}

	.container a{
		font-weight: 100em;
	}
	section {
	  width: 100%;
	  height: 100vh;
	  box-sizing: border-box;
	  padding: 140px 0; 
	  
	}
	.card img{
		border-radius: 5px;
		padding: 0;
	}
	.card {
	  text-align:left;
	  position: relative;
	  width: 280px;
	  height: ;
	  overflow: hidden;
	  border-radius: 5px;
	  margin: 0 auto;
	  padding: 40px 20px;
	  margin-top: 30px;
	  /*box-shadow: 0 5px 5px rgba(0,0,0,0.3);
	  */transition: .5s;
	}
	.card:hover {
	  transform:scale(1.06);
	}
	.card_red, .card_red .title .fa {
	  background: linear-gradient(-45deg, #ffec61, #f321d7);
	}
	.card_violet, .card_violet .title .fa  {
	  background: linear-gradient(-45deg, #f403d1, #64b5f6);
	}
	.card_three, .card_three .title .fa  {
	  background: linear-gradient(-45deg, #24ff72, #9a4eff);
	}

	.card:before {
	  content: '';
	  position: absolute;
	  bottom: 0;
	  left: 0;
	  width: 100%;
	  height: 40%;
	  background: rgba(255, 255, 255, .1);
	  z-index: 1;
	  transform: skewY(-5deg) scale(1.5);
	}

	.title .fa {
	  color: #fff;
	  font-size: 60px;
	  width: 100px;
	  height: 100px;
	  border-radius: 50%;
	  text-align: center;
	  line-height: 100px;
	  box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
	}
	.title h2 {
	  position: relative;
	  margin: 20px 0 0;
	  padding: 0;
	  color: #fff;
	  font-size: 28px;
	  z-index: 2;
	}
	.price {
	  position: relative;
	  z-index: 2;
	}
	.price h4 {
	  margin: 0;
	  padding: 20px 0;
	  color: #fff;
	  font-size: 60px;
	}
	.option {
	  position: relative;
	  z-index: 2;
	}
	.option ul {
	  margin: 0;
	  padding: 0;
	}
	.option ul li {
	  margin: 0 0 10px;
	  padding: 0;
	  list-style: none;
	  color: #fff;
	  font-size: 16px;
	}

	.card a {
	  display: block;
	  position: relative;
	  z-index: 2;
	  background-color: #fff;
	  color: #262ff;
	  width: 150px;
	  height: 40px;
	  text-align: center;
	  margin: 20px auto 0;
	  line-height: 40px;
	  border-radius: 40px;
	  font-size: 16px;
	  cursor: pointer;
	  text-decoration: none;
	  box-shadow: 0 5px 10px rgba(0,0,0, .1);
	}
	.card a:hover {
	  
	}
	.card-deck{
		margin-left: 10%;
	}
	.card-deck a{
		text-decoration: none;
		color: black;
	}
	.card-deck button{
	 	text-decoration: none;
	 	border: none;
	 	background: white;
	 	outline: none;
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
	#hike{
		font-weight: bolder;
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
	<?php if (isset($_SESSION['numberl'])) { ?>
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
		      			<svg class="_1GTCc" viewBox="6 0 12 24" width="25" height="25" fill="black"><path d="M11.9923172,11.2463768 C8.81761115,11.2463768 6.24400341,8.72878961 6.24400341,5.62318841 C6.24400341,2.5175872 8.81761115,0 11.9923172,0 C15.1670232,0 17.740631,2.5175872 17.740631,5.62318841 C17.740631,8.72878961 15.1670232,11.2463768 11.9923172,11.2463768 Z M11.9923172,9.27536232 C14.0542397,9.27536232 15.7257581,7.64022836 15.7257581,5.62318841 C15.7257581,3.60614845 14.0542397,1.97101449 11.9923172,1.97101449 C9.93039471,1.97101449 8.25887628,3.60614845 8.25887628,5.62318841 C8.25887628,7.64022836 9.93039471,9.27536232 11.9923172,9.27536232 Z M24,24 L0,24 L1.21786143,19.7101449 L2.38352552,15.6939891 C2.85911209,14.0398226 4.59284263,12.7536232 6.3530098,12.7536232 L17.6316246,12.7536232 C19.3874139,12.7536232 21.1256928,14.0404157 21.6011089,15.6939891 L22.9903494,20.5259906 C23.0204168,20.63057 23.0450458,20.7352884 23.0641579,20.8398867 L24,24 Z M21.1127477,21.3339312 L21.0851024,21.2122487 C21.0772161,21.1630075 21.0658093,21.1120821 21.0507301,21.0596341 L19.6614896,16.2276325 C19.4305871,15.4245164 18.4851476,14.7246377 17.6316246,14.7246377 L6.3530098,14.7246377 C5.4959645,14.7246377 4.55444948,15.4231177 4.32314478,16.2276325 L2.75521062,21.6811594 L2.65068631,22.0289855 L21.3185825,22.0289855 L21.1127477,21.3339312 Z"></path></svg> <?php 
		      			 echo $enop[0]['name']; ?>
		      		</a>
		      	</li>
		          <li class="nav-item">

		          <a class="nav-link active" aria-current="page" href="Logout.php">
		          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
</svg>
		          	Logout
				<!--
		          <i class="fa fa-gift"></i>
-->
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
		<?php }else{ ?>
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
		        	<a class="nav-link active" href="login.php">
		        	<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
		        		login <!--<i class="fa fa-sign-in" ></i>
-->
		        	</a>
		        </li>
		        <li class="nav-item">
		        	<a class="nav-link active" href="signup.php">
		        	<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
		        		signup
		        		<!-- <i class="fa fa-user-plus"></i>-->
		        	</a>
		        </li>
		        

		        </li>
		       
		        
		        
		    
		      </ul>
		    </div>
		  </div>
		</nav>
		<?php } ?>
		<div class="jumbotron  " id='jumbu'>
		  <div class="container">
		    <img src="../../logsignup/s1.png" >
		    <img src="../../logsignup/s2.jpg" >
			<img src="../../logsignup/s3.jpg" >
			<img src="../../logsignup/s4.jpg">

		  </div>
		</div>

<div class="container" id="dr">
	
  <div class="card-deck">
  <?php 
  $i = 0;
	  while ($i < count($en1)) {?>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<button id="a"  onclick="myFunction()" name='clicked' value="<?php echo $en1[$i]['hnumber']; ?>" >
 	 <div class="card">
    <img src="<?php echo '../../uploadedfiles/'.$en1[$i]['hnumber'].'a/thumbnails/mainthumb/'.$e2[$i]["imgname"]; ?>" class="card-img-top" >

    <div class="card-body">
      <h5 class="card-title"><?php echo $e2[$i]['restaurantname']; ?></h5>
     
      <p class="card-text">
      	<?php echo $e2[$i]['rcuisines']?>
      </p>
    </div>
   </div>
 </button>
</form>	
<?php $i++;} ?>
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

</div>
	
</div>
<script type="text/javascript">
	  var inputBox = document.getElementById('add1');
			inputBox.onkeyup = function(){
		   
		    let kmp = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query='
		     var hikp =inputBox.value;
		    let rmp = kmp.concat(hikp.replace(/ +/g, ""));
		    let xmp = rmp.concat('&key=AIzaSyDCnK-hYaGn4hUGGzeGlCUuGXBhhXyFReM');
		    console.log(xmp);
		    $.ajax({
	            url:xmp , 
	            type: "GET",   
	            dataType: 'jsonp',
	            cache: false,
	            success: function(response){                          
	                console.log(response);                   
	            }           
	        }); 
		   	//$.getJSON(xmp, function(emp) { 
             //        $('#kiki').html(emp.results);
             //)
                }; 
	//	}

</script>
  	<script
	  src="https://code.jquery.com/jquery-3.5.1.js"
	  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	  crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>

