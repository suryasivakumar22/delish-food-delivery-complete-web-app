<?php
session_start();
$categoryname = $_POST['categoryname'];
if(mkdir("../../uploadedfiles/".$_SESSION['hdatab']."a/thumbnails/menuthumb/".$categoryname)){
	$query = "INSERT INTO mycategories(categories) VALUES('".$categoryname."')";
	$conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
	#conn = mysqli_connect('localhost','root','rootpw','9999999999a');
	$query1 ="CREATE TABLE ".$categoryname."(id int   ,mname varchar(255),starttime time,endtime time,price float,stock varchar(255),cat varchar(255),imagename varchar(255))";
	#mkdir("../../"$_SESSION['hdatab']."a/thumbnails/menuthumb/"..$categoryname);
	
	mysqli_query($conn, $query1);
	
	mysqli_query($conn, $query);
	
}
/*
<script type="text/javascript">

			$("#del").click(function(){
				$.post("hcategoriesdel.php",
				{
					categoryname: $("#h").val()
				},
				function(data, status){
					reloadCategories();
				});
			});
			$("#del").click(function(){
				$.post("hcategoriesdel.php",
				{
					delt: $("#h").val()
				},
				function(data, status){
					reloadCategories();
				});
			});
			


			function reloadCategories() {
				$.get("<?php echo $_SERVER['PHP_SELF']; ?>",
				function(data, status){
					$("#ajaxcontent").html(data);
				});
			}

			reloadCategory();
			reloadCategory();
</script>
*/
?>