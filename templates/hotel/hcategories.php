<?php 
	
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<style type="text/css">
				@import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
				 header{
						color: black;
						background: #e5e5e5;
						padding: 3px;
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
		        h1{
		          font-family: 'Ubuntu Condensed';

		        }
				
				#dang button{
					float:right;
					margin-top: 10px;
				}
				.divu {
					padding-top: 20px;
					width:50%;
					float: right;
				}
				#addcat{
					width:35%;
					float: left;
					padding-top: 20px;
				}
				 #addcat button{
					margin-left: 10px;
					border-radius: 7px;
					width: 100%;
					background: black;
					color: white;
					border:1px solid black;
					outline: none;
				}
				#inle{
					padding-left: 10px;
				}
				#inleb{
					padding-left: 10px;
					display: 
				}
				#addcat button:hover{
					color: grey;
				}
				.btn .btn-danger .btn-sm{
					float: left;
				}
				#reset button{
					margin-left: 10px;
					border-radius: 5px;
					width: 100%;
					background:  black;
					color: white;
					border:1px solid  black;

				}
				#reset button:hover{
					color: grey;
				}
				#roght{
					padding-left: 100px;
				}
				h3{
			        padding-top: 10px;
			        font-family: 'Ubuntu Condensed';
			      }
			    .w3-sidebar a:hover{
		          text-decoration: none;
		          color: black;
		          background: white;
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
            .heuly:hover{
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
		</style>
		<header>
			 <h1>

					<center>
				 Your Categories
					</center>

			</h1>
		</header>
	</head>
	<body>
		<?php session_start();
if (isset($_SESSION['hdatab'])) { ?>
<div class="w3-sidebar w3-bar-block w3-dark-black "  style="width:160px;" id="sbc">
  <a href="hadmin.php" class="w3-bar-item w3-button w3-hover-white" >Dashboard</a>
  <a href="hallmenu.php" class="w3-bar-item w3-button w3-hover-white">Allmenu</a>
  <a href="hcategories.php" class="w3-bar-item w3-button w3-hover-white">Categories</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hover-white">Logout</a>
</div>

		<div id="roght">
		<div class="container">
				<div id='addcat'>
					<div class="form-check-inline">
						<label class="form-check-label" id="inleb">
							<h3>
								<strong>Add Categories</strong>
							</h3>
						</label>
						<div class="form-group form-check-label" id="reset">
								<button  name="reset" onclick="rfunction()" value="reset">reset</button>
						</div>
					</div>
						<div class="form-group" id="inle">
							<input type="text"  name="category" id="cname" class="form-control" placeholder="Enter category Name" required>
						</div>
						<div class="form-group">
							<button id="acbut" name="addcat" value="Addcat">+Add</button>
						</div>
						
				</div>
		</div>
		<div class="container">
				<div class="divu" id="ajaxcontent">
				
				</div>
		</div>
		



</div>

		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		<script>
		$("#acbut").click(function(){
				$.post("hcategoryadd.php",
				{
					categoryname: $("#cname").val()
				},
				function(data, status){
					reloadCategories();
				});
			});
			function reloadCategories() {
				$.get("hcategoryload.php",
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
  $.post("hcategoriesdel.php",
				{
					categoryid: id,
				},
				function(data, status){
					reloadCategories();
				});
}

			function reloadCategories() {
				$.get("hcategoryload.php",
				function(data, status){
					$("#ajaxcontent").html(data);
				});
			}			
			reloadCategories();

</script>
<script type="text/javascript">
	function rfunction(){
		    document.getElementById("cname").value = "";
	}
</script>
 <?php }else{ 
header('location: hlogin.php');
}  ?>  
</body>
</html>