<?php 
	session_start();
	$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
	#$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
	$query6 = 'select * from '.$_SESSION['catna'].' where id='.$_SESSION['edut'];
	$m = mysqli_query($conn, $query6);
	$en1 = mysqli_fetch_all($m,MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style type="text/css">
			@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
			header{
					color: white;
					background: black;
					padding: 1px;
			}
			body{
				font-family: 'Ubuntu Condensed';
				font-size: 23px;
			}
			.container{
				
				font-size: 20px;
				font-weight: 20em;

			}

			#dang button{
				float:right;
				margin-top: 10px;
			}
			
			#addcat{
				margin-left: auto;
				margin-right:auto;
				width:43%;
				padding-top: 40px;
				
			}
			#addcat button{
				margin: 10px;
				border-radius: 7px;
				width: 98%;
				background: black;
				color: white;
				border:1px solid black;

			}
			.inle{
				padding-left: 10px;
			}
			#inleb{
				padding-left: 10px;
			}
			#addcat button:hover{
				color: grey;
			}
			#prefill button{
				border-radius: 5px;
				width: 100%;
				background:black;
				color: white;
				border:1px solid black;

			}
			#prefill button:hover{
				color: grey;
			}
			#he{
				padding-left: 5px;
				padding-top: 7.5px;
				border: 1px solid rgb(206,212,218);
				border-radius: 5px;
				padding-bottom:5px;
			}
			#hee{
				padding-left :10px;
			}
			h1{
				font-family: 'Ubuntu Condensed'
			}
			h3{
				font-family: 'Ubuntu Condensed'
			}
			#roght{
				padding-left: 2.785%;
			}
			.w3-sidebar a:hover{
	          text-decoration: none;
	          color: #263238;
	        }
	        header{
	            color: black;
	            background: white;
	            background: transparent;
	            padding: 3px;
	            border:1px solid #e5e5e5;
	          }
	        #sbc{
	              background: black;
	              color:white;
        }
		</style>
		<header>
			 <h1>

					<center>
	Update Menu					</center>

			</h1>
		</header>
	</head>
	<body>
		<?php 
if (isset($_SESSION['hdatab'])) { ?>
		<div class="w3-sidebar w3-bar-block w3-dark-black "  style="width:160px;" id="sbc">
		  <a href="hadmin.php" class="w3-bar-item w3-button w3-hover-white" >Dashboard</a>
		  <a href="hallmenu.php" class="w3-bar-item w3-button w3-hover-white">Allmenu</a>
		  <a href="hcategories.php" class="w3-bar-item w3-button w3-hover-white">Categories</a>
		  <a href="logout.php" class="w3-bar-item w3-button w3-hover-white">Logout</a>
</div>
		<div id='roght'>
		<div class="container">
				<div id='addcat'>
					<div class="form-check-inline">
					<label class="form-check-label" id="inleb">
						<h3>
							<strong>Edit Menu</strong>
						</h3>
					</label>
					<div class="form-group form-check-label" id="prefill">
							<button id="return" onclick="returnfunction() " name="return" >replace</button>
					</div>
					</div>
					<form id='eform'  method='POST' enctype="multipart/form-data" action="heditupdate.php">
						<div class="form-group inle" >
							<input type="text"  name="mname" id="mname"   class="form-control" placeholder="Enter menu Name" required>
						</div>
						<div class="form-group inle" >
							<input type="time"  name="startime"  id="startime" class="form-control" placeholder="Enter startime" onfocus="(this.type='time')"
        onblur="(this.type='text')" required>
						</div>
						<div class="form-group inle" >
							<input type="time"  name="endtime"  id="endtime" class="form-control" placeholder="Enter endtime" onfocus="(this.type='time')"
        onblur="(this.type='text')"required>
						</div>
						<div class="form-group inle" >
							<input type="digit"  name="price"   id="price" class="form-control" placeholder="Enter price" required>
						</div>
						<div id="hee">

								<div class="form-group inle" id="he">
			          					<input type="file" class="form-control-file" placeholder="upload" name="img"  id="img" required>
								</div>

						</div>
					<div class="form-group inle ">
						<select name="stk" id="stk">
				           <option value='instock'>instock</option>
				            <option value="outofstock">outofstock</option>
				        </select>
					
						<select name="rtk" id="rtk">
				           <option value='veg'>veg</option>
				            <option value="nonveg">nonveg</option>
				        </select>
					</div>
						
						<div class="form-group">
							<button id="update" name="update" >Update</button>
						</div>
					</form>
						
					
					</div>
		</div>	
	</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script type="text/javascript">
			function returnfunction(e){

			document.getElementById("mname").value = "<?php echo $en1[0]['mname']?>";
			document.getElementById("startime").value = "<?php echo $en1[0]['starttime']?>";
			document.getElementById("endtime").value = "<?php echo $en1[0]['endtime']?>";
			document.getElementById("price").value = "<?php echo $en1[0]['price']?>";
			document.getElementById("img").value = "<?php echo $en1[0]['imagename']?>";
			document.getElementById("stk").value = "<?php echo $en1[0]['stock']?>";
			$("#return").hide();
		}
		</script>
		 <?php }else{ 
header('location: hlogin.php');
}  ?>  
</body>
</html>