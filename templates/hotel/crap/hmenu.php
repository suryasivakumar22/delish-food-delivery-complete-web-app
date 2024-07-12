<?php 
	session_start();
	/*
$dir = "../../uploadedfiles/9999999999a/thumbnails/menuthumb/".$categoryname;
$tf = $dir . basename($_POST['imagename']);
$Ok = 1;
$ift = strtolower(pathinfo($tf,PATHINFO_EXTENSION));


if (file_exists($tf)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

if($ift != "jpg" && $ift != "png" && $ift != "jpeg" ) {
  echo "Sorry, only JPG, JPEG, PNG  files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_POST["imagename"], $dir)) {
    $tr = basename($tf,$ift);
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

$query = "INSERT INTO $categoryname(mname,starttime,endtime,price,imagename) VALUES('".$_POST['menuname']."',".$_POST['st'].','.$_POST['et'].',"'.$_POST['price'].'","'.$_POST['imagename'].'"');*/
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style type="text/css">
			@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
				header{
						color: white;
						background: #4B79A1;
						padding: 3px;
				}
				body{
					font-family: 'Ubuntu Condensed';
				}
				.container{
					padding: 20px;
					font-size: 20px;
					font-weight: 20em;

				}

				#dang button{
					float:right;
					margin-top: 10px;
				}
				.divu {
					width:60%;
					float: right;
				}
				#addcat{
					width:35%;
					float: left;
					padding-top: 40px;
				}
				#addcat button{
					margin: 10px;
					border-radius: 7px;
					width: 100%;
					background: #4B79A1;
					color: white;
					border:1px solid #4B79A1;

				}
				#inle{
					padding-left: 10px;
				}
				#inleb{
					padding-left: 10px;
				}
				#addcat button:hover{
					color: black ;
				}

		</style>
		<header>
			 <h1>

					<center>
				 Your Category's menu (<?php echo $_SESSION['catna'] ?>)
					</center>

			</h1>
		</header>
	</head>
	<body>
		<div class="container">
				<div id='addcat'>
					<label id="inleb">
						<h3>
							<strong>Add menu</strong>
						</h3>
					</label>
					<div id="inle">
						<div class="form-group" >
							<input type="text"  name="menu" id="mname" class="form-control" placeholder="Enter menu Name" required>
						</div>
						<div class="form-group" >
							<input type="text"  name="startime" id="startime" class="form-control" placeholder="Enter startime" required>
						</div>
						<div class="form-group" >
							<input type="text"  name="endtime" id="endtime" class="form-control" placeholder="Enter endtime" required>
						</div>
						<div class="form-group" >
							<input type="text"  name="price" id="price" class="form-control" placeholder="Enter price" required>
						</div>
						<!--
						<div class="form-group" id="ha">
								<label for="img">Upload Image</label>
	          					<input type="file" class="form-control-file" name="img"  id="img" required>
          				    
						</div>
						-->
					</div>
						<div class="form-group">
							<button id="but" name="addme" value="Addme">+Add</button>
						</div>
				</div>
		</div>
		<div class="container">
				<div class="divu" id="ajaxcontent">
				
				</div>
		</div>	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script>
			$("#but").click(function(){
				$.post("hmenuadd.php",
				{

					menuname : $("#mname").val(),
					st : $("#startime").val(),
					et : $("#endtime").val(),
					price : $("#price").val(),
					/*img : $("#img").val(),
*/
				},
				function(data, status){
					reloadcategories();
				});
			});
			function reloadCategories() {
				$.get("hmenuload.php",
				function(data, status){
					$("#ajaxcontent").html(data);
				});
			}

			

			
			reloadCategories();


			


		</script>
	</body>
</html>