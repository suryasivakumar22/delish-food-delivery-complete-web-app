<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap');
       
        #sbc{
              background: black;
              color:white;
            }
        body{
          font-family: 'Ubuntu Condensed';
          font-size: 23px;
          
        }
        h1{
          font-family: 'Ubuntu Condensed';}
        .w3-sidebar a:hover{
          text-decoration: none;
          
        }
         header{
            color: black;
            background: white;
            background: transparent;
            padding: 3px;
            border:1px solid #e5e5e5;
          }
         .hliveorders{
          margin-top: 10px;
          margin-left:10px;
          border: 1px solid white;
          width: 350px;
          padding: 10px;
          color: white;
          background: black;
          border-radius: 5px;
          height: 240px;
          display: inline-block;
          transition: 0.5s;
          overflow-x: hidden; 
          overflow-y: auto; 
          text-align:justify; 
          transition: 1s;
         }
         .hliveorders:hover{
          transform: scale(1.025);
         }
         h4{
          font-family: "Ubuntu Condensed";
          padding-top: 10px;
         }
         #rliveorders{
          margin-left: 200px;
         }
        ::-webkit-scrollbar { 
            display: none; 
        }
        .holk,.kouk,.kuluk{
          background: white;
          margin-left: 10px;
          border-radius: 5px;
          border: none;
          width: 300px;
          margin-top: 5px;
        }
        .kouk:hover,.holk:hover,.kuluk:hover{
           background: black;
           color: white;
        }
        .rouk{
          margin-top: 20px;
        }
</style>

    <header >
      
     <center>
      <h1>
         admin
      </h1>
     </center>
      
    </header>
<body><?php 
if (isset($_SESSION['hdatab'])) { ?>
<div class="w3-sidebar w3-bar-block w3-dark-black "   style="width:160px;" id="sbc">
  <a href="hadmin.php" class="w3-bar-item w3-button w3-hover-white" >Dashboard</a>
  <a href="hallmenu.php" class="w3-bar-item w3-button w3-hover-white">Allmenu</a>
  <a href="hcategories.php" class="w3-bar-item w3-button w3-hover-white">Categories</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hover-white">Logout</a>
</div>
<div id="rliveorders" >
  <?php //var_dump($kuop); ?>
</div>
<script type="text/javascript">
  function reloadCategories() {
        $.get("hliveorders.php",
        function(data, status){
          $("#rliveorders").html(data);
        });
      }     
      reloadCategories();
  
</script>
<script type="text/javascript">
  
</script>
<?php }else{ 
header('location: hlogin.php');
}  ?> 
</body>
</html>
