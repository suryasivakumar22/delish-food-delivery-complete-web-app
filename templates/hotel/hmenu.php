<?php 
	session_start();
	
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
						background: #263238;
						padding: 1px;
				}
				body{
					font-family: 'Ubuntu Condensed';
					font-size: 23px;
				}
				.container{
					padding: 0 20px 0 20px;
					font-size: 20px;
					font-weight: 20em;

				}
				#dang button{
					float:right;
					margin-top: 10px;
				}
				.divu {
					width:62%;
					float: right;
				}
				#addcat{
					width:35%;
					float: left;
					padding-top: 0;
				}
				#addcat button{
					
					border-radius: 7px;
					width: 100%;
					background: black;
					color: white;
					border:1px solid black;
					outline: none;
				}
				
				#addcat button:hover{
					color:grey ;
				}
				.btn .btn-danger .btn-sm{
					float: left;
				}
				#reset button{ 				 
					border-radius: 5px;
					width: 100%;
					background: black;
					color: white;
					border:1px solid black;
					margin-left: 5px;
				}
				#reset button:hover{
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
					padding-left :0px;
				}
				#stk{
					border: 1px solid rgb(206,212,218);
				}
				#rtk{
					border: 1px solid rgb(206,212,218);
				}
				h1{
					font-family: 'Ubuntu Condensed'
				}
				h3{
					font-family: 'Ubuntu Condensed'
				}
				#roght{
					padding-left: 100px;
					padding-top: 20px;
				}
				.w3-sidebar a:hover{
		          color: #4B79A1;
		          text-decoration: none;
				}
		        #idbut button{
		        	border: 2px solid black;
		        	border-radius: 5px;
		        	color: black;
		        	margin-top: 10px;
		        	height: 30px;
		        	width: 30%;
		        	background: transparent;
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
            select{
            	width: 43%;
            	outline: none;
            }
       	.heloy:hover{
       		background: black;
       		color: white;
       	}
       	.edit,.delete{
            	background: black;
            	color: white;
            	border: none;
            	border-radius: 5px;
            }
            .edit:hover,.delete:hover{
            	background: white;
            	color: black;
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

							<strong>Add menu </strong>
								

						</h3>
					</label>
					<div class="form-group form-check-label" id="reset">
							<button  name="reset" onclick="rfunction()" value="reset">reset</button>
					</div>
				</div>
				<form id="data" method="post" enctype="multipart/form-data">
						<div class="form-group inle" >
							<input type="text"  name="mname" id="mname" class="form-control" placeholder="Enter menu Name" maxlength="30" required>
						</div>
						<div class="form-group inle" >
							<input type="time"  name="startime" id="startime" class="form-control" placeholder="Enter startime" onfocus="(this.type='time')"
        onblur="(this.type='text')" required>
						</div>
						<div class="form-group inle" >
							<input type="time"  name="endtime" id="endtime" class="form-control" placeholder="Enter endtime" onfocus="(this.type='time')"
        onblur="(this.type='text')" required>
						</div>
						<div class="form-group inle" >
							<input type="digit"  name="price" id="price" class="form-control" placeholder="Enter price" required>
						</div>
						<div id="hee">

								<div class="form-group inle" id="he">
			          					<input type="file" class="form-control-file" placeholder="upload" name="img"  id="img" required>
								</div>

						</div>
					<div style="display: inline-block;">
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
				</div>
						<div class="form-group ">
							<button id="acbut" name="addcat" value="Addcat" type="submit">+Add</button>
						</div>
						</form>
				</div>
		</div>
		<div class="container">
				<div class="divu" id="ajaxcontent">
				
				</div>
		</div>		
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script>
			    /*
			$("#acbut").click(function(){
				
				var form = $('form')[0]; // You need to use standard javascript object here
				var formData = new FormData(form);
				$.ajax({
				    url: 'hmenuadd.php',
				    data: formData,
				    type: 'POST',
				    contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
				    processData: false, // NEEDED, DON'T OMIT THIS
				    // ... Other options like success and etc
				},function(data, status){
					console.log(data);
					console.log(status);

					reloadCategories();
				});
				
				$.post("hmenuadd.php",
				{
					menuname: $("#mname").val(),
					st : $("#startime").val(),
					et : $("#endtime").val(),
					price : $("#price").val(),
					img :$("#img").val(),

				},
				function(data, status){

					reloadCategories();
				});
			});
			function reloadCategories() {
				$.get("hmenuload.php",
				function(data, status){
					$("#ajaxcontent").html(data);
				});
			}			
			reloadCategories();*/

		</script>
<script type="text/javascript">
	$("form#data").submit(function(e) {
    	e.preventDefault();
    	var formData = new FormData(this);    

    $.ajax({
        url: "hmenuadd.php",
        type: 'POST',
        data: formData,
        success: function (data) {
            reloadCategories();
        },
        cache: false,
        contentType: false,
        processData: false
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
<script type="text/javascript">

		function deleteRow(r,id) {
		  var i = r.parentNode.parentNode.rowIndex;
		  document.getElementById("tab").deleteRow(i);
		  $.post("hmenudel.php",
				{
					menucat: id,
				},
				function(data, status){
					reloadCategories();
				},
);
}

			function reloadCategories() {
				$.get("hmenuload.php",
				function(data, status){
					$("#ajaxcontent").html(data);
				});
			}			
			reloadCategories();

</script>
<script type="text/javascript">
	function rfunction(){
		    document.getElementById("mname").value = "";
			document.getElementById("startime").value = "";
			document.getElementById("endtime").value = "";
			document.getElementById("price").value = "";
			document.getElementById("img").value = "";

	}
</script>
 <?php }else{ 
header('location: hlogin.php');
}  ?>  
</body>
</html>