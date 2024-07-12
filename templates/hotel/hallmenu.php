<?php
  session_start();
  $conn = mysqli_connect('localhost','root','rootpw',$_SESSION['hdatab'].'a');
  #$conn = mysqli_connect('localhost','root','rootpw','9999999999a');
  $query = 'select * from mycategories';
  $m = mysqli_query($conn, $query);
  $en1 = mysqli_fetch_all($m,MYSQLI_ASSOC);
#  var_dump($en1); 
  $en2 =  array();

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
        header {
              color: white;
              background: #263238;
              padding: 3px;
             
        }
        body{
          font-family: 'Ubuntu Condensed';
          font-size: 23px;
        }
        h1{
          font-family: 'Ubuntu Condensed';

        }
        table{
          padding: 20px;
          margin-left:24%;
          align-content: center;
          margin-top: 4%;
          column-fill: auto;

        }
        #tab th{
          column-gap: 10px;
          column-fill: auto;
        }
      .table{
        width: 60%;
      }
      h3{
        padding-top: 10px;
        font-family: 'Ubuntu Condensed';
      }
      .gig:hover{
          color: white;
          background: black;
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
            .w3-bar-item:hover{
                text-decoration: none;
            }

</style>

    <header>
     
     <center>
      <h1>
         All Menu
      </h1>
     </center>
     
    </header>
<body>
<?php 
if (isset($_SESSION['hdatab'])) { ?>
<div class="w3-sidebar w3-bar-block w3-dark-black "  style="width:160px;" id="sbc">
  <a href="hadmin.php" class="w3-bar-item w3-button w3-hover-white" >Dashboard</a>
  <a href="hallmenu.php" class="w3-bar-item w3-button w3-hover-white">Allmenu</a>
  <a href="hcategories.php" class="w3-bar-item w3-button w3-hover-white">Categories</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hover-white">Logout</a>
</div>
<?php

foreach ($en1 as  $value) {
                    $query1="select * from ".$value['categories'];
                    $m1 = mysqli_query($conn, $query1);
                    $en3 = mysqli_fetch_all($m1,MYSQLI_ASSOC);
                    $i = 0;                      
                    ?>
    <h3><center><strong><?php echo $value['categories']; ?></strong></center></h3>

<table class="table table-sm" id="tab">
             
             
                    <tr>
                      <th scope="col">Menu item</th>
                      <th scope="col">Starttime</th>
                      <th scope="col">Endtime</th>
                      <th scope="col">Price</th>
                      <th scope="col">stock</th>
                      <th scope="col">Veg/NonVeg</th>
                    </tr>
              
              
              
                
              <?php while ($i < count($en3)) {  ?>

                <tr class="gig">                 
                  <td scope="row" class="tig"><?php echo $en3[$i]['mname']; ?></td>
                  <td scope="row" class="tig"><?php echo $en3[$i]['starttime']; ?></td>
                  <td scope="row" class="tig"><?php echo $en3[$i]['endtime']; ?></td>
                  <td scope="row" class="tig"><?php echo $en3[$i]['price']; ?></td>
                  <td scope="row" class="tig"><?php echo $en3[$i]['stock']; ?></td>  
                  <td scope="row" class="tig"><?php echo $en3[$i]['cat']; ?></td>
                </tr>
              <?php $i++;} ?>        
          

      </table>
      <?php  }?> 
    <?php }else{ 
header('location: hlogin.php');
}  ?>  
  </body>
</html>
